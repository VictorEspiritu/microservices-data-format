<?php
declare(strict_types = 1);

namespace Domain\Model\Meetup;

use Domain\Model\Meetup\Geolocation;

final class Location
{
    private $address;
    private $geolocation;

    public function __construct(
        string $address,
        Geolocation $geolocation
    ) {
        $this->address = $address;
        $this->geolocation = $geolocation;
    }

    public function __toString()
    {
        return sprintf('%s, which is at %s', $this->address, (string)$this->geolocation);
    }
}
