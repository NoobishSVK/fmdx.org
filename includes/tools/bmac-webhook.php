<?php
// Webhook URL for Buy Me a Coffee: https://fmdx.org/includes/tools/bmac-webhook.php
$config = $_SERVER['DOCUMENT_ROOT'] . '/config.php';
if (is_file($config)) include $config;
require __DIR__ . '/bmac.php';

$body = file_get_contents('php://input');
$sig = $_SERVER['HTTP_X_SIGNATURE_SHA256'] ?? '';
if (empty($bmac_webhook_secret) || !hash_equals(hash_hmac('sha256', $body, $bmac_webhook_secret), $sig)) {
    http_response_code(401);
    exit;
}

$event = json_decode($body, true);
$type = $event['type'] ?? '';
$amount = (float)($event['data']['amount'] ?? 0);

// Any event with money counts; refunds subtract, cancel/pause events carry no new payment
if (preg_match('/cancel|pause/', $type) || !$amount) exit;
if (str_contains($type, 'refund')) $amount = -$amount;

// 500 makes BMC retry instead of losing the payment
$ok = @file_put_contents(BMAC_LOG, json_encode([
    'key' => $type . ':' . ($event['data']['id'] ?? $event['event_id'] ?? uniqid()),
    'amount' => $amount,
    'currency' => $event['data']['currency'] ?? '',
    'time' => time(),
]) . "\n", FILE_APPEND | LOCK_EX);
if ($ok === false) http_response_code(500);
