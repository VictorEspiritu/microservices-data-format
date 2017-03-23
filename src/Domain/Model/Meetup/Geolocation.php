<?php
declare(strict_types = 1);

namespace Domain\Model\Meetup;

use Assert\Assertion;

final class Geolocation
{
    private $latitude;
    private $longitude;

    public function __construct(
        float $latitude,
        float $longitude
    ) {
        Assertion::between($latitude, -90, 90);
        Assertion::between($longitude, -180, 180);
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function __toString(): string
    {
        return sprintf(
            '%f,%f',
            $this->latitude,
            $this->longitude
        );
    }
}
