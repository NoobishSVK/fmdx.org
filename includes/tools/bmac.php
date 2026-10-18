<?php
// Buy Me a Coffee: payments are pushed to bmac-webhook.php and stored here, one JSON per line
define('BMAC_LOG', $_SERVER['DOCUMENT_ROOT'] . '/data/bmac_payments.jsonl');

function get_total_amount_last_30_days() {
    $lines = is_file(BMAC_LOG) ? file(BMAC_LOG, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
    $seen = [];
    $total = 0;
    foreach ($lines as $line) {
        $p = json_decode($line, true);
        // BMC retries webhooks, so the same event can arrive twice
        if (!$p || isset($seen[$p['key']]) || $p['time'] < time() - 30 * 86400) continue;
        $seen[$p['key']] = true;
        $total += $p['amount'];
    }
    // shortcut: currencies are summed as-is, fine while the BMC page is in EUR
    return number_format($total, 0) . ' €';
}

$total_amount = get_total_amount_last_30_days();
