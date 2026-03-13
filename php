<?php

// Simple PHP automation example

$url = "https://api.example.com/data";
$logFile = "log.txt";

// Fetch data from API
$response = file_get_contents($url);

if ($response === false) {
    echo "Failed to fetch data.\n";
    exit;
}

// Convert JSON response to array
$data = json_decode($response, true);

// Example automation logic
$status = $data['status'] ?? 'unknown';

// Create log message
$logMessage = date("Y-m-d H:i:s") . " - Status: " . $status . PHP_EOL;

// Save result to log file
file_put_contents($logFile, $logMessage, FILE_APPEND);

echo "Automation executed and logged successfully.\n";

?>
