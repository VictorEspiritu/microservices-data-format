<?php
declare(strict_types = 1);

use CustomJSONSerialization\BadRequest;
use CustomJSONSerialization\UpdateLocation;
use Domain\Model\Meetup\Geolocation;
use Domain\Model\Meetup\Location;
use function \GuzzleHttp\json_decode;

require __DIR__ . '/../../../vendor/autoload.php';

// Throws exceptions when deserialization is problematic
$data = json_decode(file_get_contents('php://input'));

try {
    $updateLocationDto = UpdateLocation::fromData($data);

    $domainObject = new Location(
        $updateLocationDto->address(),
        new Geolocation(
            $updateLocationDto->latitude(),
            $updateLocationDto->longitude()
        )
    );

    http_response_code(200);
    header('Content-Type: text/plain');
    echo (string)$domainObject;
} catch (BadRequest $exception) {
    http_response_code(400);
    echo $exception->getMessage();
}
