<?php
declare(strict_types = 1);

use GuzzleHttp\Client;
use Util\Response;

require __DIR__ . '/../../vendor/autoload.php';

$location = [
    'address' => 'Slotlaan 274, 3701 GW Zeist, Nederland'
];

$client = new Client();
$response = $client->post('http://upcasting_server/', [
    'body' => json_encode($location),
    'headers' => [
        'Content-Type' => 'application/json',
        'X-Message-Version' => 1
    ]
]);

Response::printIt($response);
echo "\n";
