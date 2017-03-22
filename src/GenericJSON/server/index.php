<?php
declare(strict_types = 1);

use Domain\Model\Meetup\Geolocation;
use Domain\Model\Meetup\Location;
use function \GuzzleHttp\json_decode;

require __DIR__ . '/../../../vendor/autoload.php';

$rawJson = file_get_contents('php://input');

$updateLocationDto = json_decode($rawJson);

$domainObject = new Location(
    $updateLocationDto->address,
    new Geolocation(
        $updateLocationDto->latitude,
        $updateLocationDto->longitude
    )
);

echo (string)$domainObject;
