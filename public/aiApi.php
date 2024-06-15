<?php

// Endpoint URL
$aiServerUrl = 'https://ydegrees.pearlbuddy.com:2024/append';
$queryString = http_build_query(['string' => 'what is water']);

// Set stream context options for HTTPS
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => true,        // Enable SSL verification
        'verify_peer_name' => true,   // Enable SSL verification
        'allow_self_signed' => false, // Disable self-signed certificate acceptance
        'timeout' => 30               // Set timeout to 30 seconds
    ]
]);

// Construct full URL with query string
$url = $aiServerUrl . '?' . $queryString;

// Perform the HTTP GET request
$response = file_get_contents($url, false, $context);

if ($response === false) {
    die('Failed to fetch data: ' . error_get_last()['message']);
}

// Process the response
echo $response;
