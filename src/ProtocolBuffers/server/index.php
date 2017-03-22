<?php

use Domain\Model\Meetup\Geolocation;
use Domain\Model\Meetup\Location;
use ProtocolBuffers\Meetup\UpdateLocation;

require __DIR__ . '/../../../vendor/autoload.php';

// get the request body as a resource
$stream = fopen('php://input', 'r+b');

$updateLocationDto = UpdateLocation::fromStream($stream);

http_response_code(200);
header('Content-Type: text/plain');

$domainObject = new Location(
    $updateLocationDto->getAddress(),
    new Geolocation(
        $updateLocationDto->getLatitude(),
        $updateLocationDto->getLongitude()
    )
);
echo (string)$domainObject;
