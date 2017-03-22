<?php

use ProtocolBuffers\Meetup\UpdateLocation;
use Util\Response;

require __DIR__ . '/../../vendor/autoload.php';

$message = new UpdateLocation();
$message->setAddress('Slotlaan 274, 3701 GW Zeist, Nederland');
$message->setLatitude(52.0877911);
$message->setLongitude(5.2454705);

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://protocol_buffers_server/',
    [
        'body' => $message->toStream()
    ]
);

Response::printIt($response);
echo "\n";
