<?php
header('Content-Type: application/json');

// Define the URL of the file
$url = 'https://www.fmlist.org/livemuf.txt';

// Define cache file and cache duration
$cache_file = 'muf_info.json';
$cache_duration = 300; // 5 minutes in seconds

// Check if cache file exists and is valid
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_duration)) {
    // Read data from cache
    $response = file_get_contents($cache_file);
    echo $response;
    exit;
}

// Fetch the content of the file
$data = file_get_contents($url);
if ($data === FALSE) {
    die(json_encode(['error' => 'Failed to fetch the file.']));
}

// Parse the content
$lines = explode("\n", trim($data));
$entries = [];
foreach ($lines as $line) {
    $parts = explode('|', $line);
    if (count($parts) == 7) {
        list($datetime, $name, $qth_receiver, $name_transmitter, $qth_transmitter, $frequency, $propagation) = $parts;
        $entries[] = [
            'datetime' => $datetime,
            'name' => $name,
            'qth_receiver' => $qth_receiver,
            'name_transmitter' => $name_transmitter,
            'qth_transmitter' => $qth_transmitter,
            'frequency' => $frequency,
            'propagation' => $propagation
        ];
    }
}

// Get the current time in UTC and subtract one hour to filter the entries
$current_time = new DateTime('now', new DateTimeZone('UTC'));
$one_hour_ago = clone $current_time;
$one_hour_ago->modify('-1 hour');

// Define arrays to hold frequencies and last log times for each region
$frequencies_north_america = [];
$frequencies_europe = [];
$frequencies_australia = [];
$last_log_north_america = null;
$last_log_europe = null;
$last_log_australia = null;

// Function to check if a QTH locator is in North America
function isNorthAmerica($qth) {
    $prefix = substr($qth, 0, 2);
    return ($prefix >= 'CK' && $prefix <= 'GP');
}

// Function to check if a QTH locator is in Europe
function isEurope($qth) {
    $prefix = substr($qth, 0, 2);
    return ($prefix >= 'HM' && $prefix <= 'LQ');
}

// Function to check if a QTH locator is in Australia
function isAustralia($qth) {
    $prefix = substr($qth, 0, 2);
    return ($prefix >= 'QF' && $prefix <= 'RK');
}

// Filter and classify the entries
foreach ($entries as $entry) {
    $entry_time = new DateTime($entry['datetime'], new DateTimeZone('UTC'));
    if ($entry_time >= $one_hour_ago && $entry_time <= $current_time) {
        if (isNorthAmerica($entry['qth_receiver'])) {
            $frequencies_north_america[] = $entry['frequency'];
            if ($last_log_north_america === null || $entry_time > $last_log_north_america) {
                $last_log_north_america = $entry_time;
            }
        } elseif (isEurope($entry['qth_receiver'])) {
            $frequencies_europe[] = $entry['frequency'];
            if ($last_log_europe === null || $entry_time > $last_log_europe) {
                $last_log_europe = $entry_time;
            }
        } elseif (isAustralia($entry['qth_receiver'])) {
            $frequencies_australia[] = $entry['frequency'];
            if ($last_log_australia === null || $entry_time > $last_log_australia) {
                $last_log_australia = $entry_time;
            }
        }
    }
}

// Calculate the maximum frequency for each region
$max_freq_north_america = !empty($frequencies_north_america) ? max($frequencies_north_america) : 'No data';
$max_freq_europe = !empty($frequencies_europe) ? max($frequencies_europe) : 'No data';
$max_freq_australia = !empty($frequencies_australia) ? max($frequencies_australia) : 'No data';

$max_freq_north_america_rounded = is_numeric($max_freq_north_america) ? round($max_freq_north_america / 1000) : 'No data';
$max_freq_europe_rounded = is_numeric($max_freq_europe) ? round($max_freq_europe / 1000) : 'No data';
$max_freq_australia_rounded = is_numeric($max_freq_australia) ? round($max_freq_australia / 1000) : 'No data';

// Calculate the time difference in minutes for last log time for each region
$last_log_diff_north_america = $last_log_north_america ? $current_time->getTimestamp() - $last_log_north_america->getTimestamp() : null;
$last_log_diff_europe = $last_log_europe ? $current_time->getTimestamp() - $last_log_europe->getTimestamp() : null;
$last_log_diff_australia = $last_log_australia ? $current_time->getTimestamp() - $last_log_australia->getTimestamp() : null;

// Format the last log times as minutes ago
$last_log_north_america_str = $last_log_diff_north_america !== null ? ($last_log_diff_north_america < 60 ? 'a minute ago' : floor($last_log_diff_north_america / 60) . " minutes ago") : 'No data';
$last_log_europe_str = $last_log_diff_europe !== null ? ($last_log_diff_europe < 60 ? 'a minute ago' : floor($last_log_diff_europe / 60) . " minutes ago") : 'No data';
$last_log_australia_str = $last_log_diff_australia !== null ? ($last_log_diff_australia < 60 ? 'a minute ago' : floor($last_log_diff_australia / 60) . " minutes ago") : 'No data';

// Prepare the response
$response = [
    'north_america' => [
        'max_frequency' => $max_freq_north_america_rounded,
        'last_log' => $last_log_north_america_str
    ],
    'europe' => [
        'max_frequency' => $max_freq_europe_rounded,
        'last_log' => $last_log_europe_str
    ],
    'australia' => [
        'max_frequency' => $max_freq_australia_rounded,
        'last_log' => $last_log_australia_str
    ]
];

// Save the response to cache file
file_put_contents($cache_file, json_encode($response));

// Output the response in JSON format
echo json_encode($response);
?>
