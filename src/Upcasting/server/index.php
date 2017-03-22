<?php

use Upcasting\Message;
use function GuzzleHttp\json_decode;

require __DIR__ . '/../../../vendor/autoload.php';

$upcaster = new \Upcasting\UpdateLocationUpcaster();

$rawJson = file_get_contents('php://input');

$messageData = json_decode($rawJson);
$messageVersion = $_SERVER['HTTP_X_MESSAGE_VERSION'];

$originalMessage = new Message($messageVersion, $messageData);

$updatedMessage = $upcaster->castUp($originalMessage);

header('Content-Type: text/plain');
http_response_code(200);
print_r($updatedMessage);
