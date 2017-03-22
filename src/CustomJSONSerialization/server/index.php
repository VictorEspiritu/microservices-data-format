<?php
declare(strict_types = 1);

use CustomJSONSerialization\UpdateLocation;
use Domain\Model\Meetup\Geolocation;
use Domain\Model\Meetup\Location;

require __DIR__ . '/../../../vendor/autoload.php';

$updateLocationDto = UpdateLocation::fromJson(file_get_contents('php://input'));

$domainObject = new Location(
    $updateLocationDto->address(),
    new Geolocation(
        $updateLocationDto->latitude(),
        $updateLocationDto->longitude()
    )
);

echo (string)$domainObject;
