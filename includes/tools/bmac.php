<?php

// Include your configuration file where the $bmac_api_key is defined
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// Define cache duration in seconds (e.g., 300 seconds = 5 minutes)
define('CACHE_DURATION', 300);

// Function to fetch data from a specific API endpoint with caching
function fetch_data_from_api($api_key, $endpoint) {
    $cache_file = $_SERVER['DOCUMENT_ROOT'] . '/cache/' . md5($endpoint) . '.json';
    
    // Check if the cache file exists and is not expired
    if (file_exists($cache_file) && (time() - filemtime($cache_file) < CACHE_DURATION)) {
        return json_decode(file_get_contents($cache_file), true);
    }
    
    // Fetch data from API
    $url = 'https://developers.buymeacoffee.com/api/v1/' . $endpoint;
    $headers = [
        'Authorization: Bearer ' . $api_key
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        echo 'Curl error: ' . curl_error($ch);
        curl_close($ch);
        return false;
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code >= 400) {
        echo "HTTP error: $http_code\nResponse: $response";
        return false;
    }

    // Save response to cache file
    file_put_contents($cache_file, $response);

    // Decode JSON response
    return json_decode($response, true);
}

// Function to calculate the total amount from supporters and subscriptions
function get_total_amount_last_30_days() {
    global $bmac_api_key;

    // Fetch data from both supporters and subscriptions endpoints
    $supporters_data = fetch_data_from_api($bmac_api_key, 'supporters');
    $subscriptions_data = fetch_data_from_api($bmac_api_key, 'subscriptions');

    $total_amount = 0;

// Calculate total from supporters
if (isset($supporters_data) && is_array($supporters_data)) {
    foreach ($supporters_data['data'] as $supporter) { // Ensure you're iterating over 'data' array
        if (is_array($supporter) && isset($supporter['support_coffee_price'])) {
            $total_amount += (float)$supporter['support_coffee_price'];
        } else {
            echo "Supporter data is missing or malformed: ";
            print_r($supporter);
        }
    }
} else {
    echo "Error: Supporters data is not an array.";
}


    // Calculate total from subscriptions
    if (isset($subscriptions_data['data']) && is_array($subscriptions_data['data'])) {
        foreach ($subscriptions_data['data'] as $subscription) {
            if (is_array($subscription) && isset($subscription['subscription_coffee_price'])) {
                $total_amount += (float)$subscription['subscription_coffee_price'];
            }
        }
    } else {
        echo "Error: Subscriptions data is not an array or 'data' is not set.";
    }

    // Return the total amount
    return number_format($total_amount, 0) . ' €';
}

// Use the function and display the result
$total_amount = get_total_amount_last_30_days();
?>