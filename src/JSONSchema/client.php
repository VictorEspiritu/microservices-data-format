<?php
declare(strict_types = 1);

use GuzzleHttp\Client;
use Util\Response;

require __DIR__ . '/../../vendor/autoload.php';

$location = [
    'address' => 'Slotlaan 274, 3701 GW Zeist, Nederland',
//    'latitude' => 52.0877911,
//    'longitude' => 5.2454705
];

$client = new Client();
$response = $client->post('http://json_schema_server/', [
    'body' => json_encode($location),
    'headers' => [
        'Content-Type' => 'application/json'
    ]
]);

Response::printIt($response);
echo "\n";
