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

// Refunds count as negative payments; other event types are ignored
if (str_ends_with($type, '.refunded')) $amount = -$amount;
elseif (!in_array($type, ['donation.created', 'membership.started', 'membership.updated', 'extra_purchase.created'])) exit;

file_put_contents(BMAC_LOG, json_encode([
    'key' => $type . ':' . ($event['data']['id'] ?? $event['event_id'] ?? uniqid()),
    'amount' => $amount,
    'currency' => $event['data']['currency'] ?? '',
    'time' => time(),
]) . "\n", FILE_APPEND | LOCK_EX);
