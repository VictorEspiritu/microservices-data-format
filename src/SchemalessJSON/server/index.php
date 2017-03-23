<?php
declare(strict_types = 1);

use Domain\Model\Meetup\Geolocation;
use Domain\Model\Meetup\Location;
use function \GuzzleHttp\json_decode;

require __DIR__ . '/../../../vendor/autoload.php';

// Read the JSON data from the request body
$rawJson = file_get_contents('php://input');

// Deserialize the JSON data into an untyped object
$updateLocationDto = json_decode($rawJson);

$domainObject = new Location(
    $updateLocationDto->address,
    new Geolocation(
        $updateLocationDto->latitude,
        $updateLocationDto->longitude
    )
);

http_response_code(200);
header('Content-Type: text/plain');
echo (string)$domainObject;
