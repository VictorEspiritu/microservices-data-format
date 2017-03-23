<?php
declare(strict_types = 1);

namespace Domain\Model\Meetup;

use Assert\Assertion;

final class Location
{
    private $address;
    private $geolocation;

    public function __construct(
        string $address,
        Geolocation $geolocation
    ) {
        Assertion::notEmpty($address);
        $this->address = $address;
        $this->geolocation = $geolocation;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s, which is at %s',
            $this->address,
            (string)$this->geolocation
        );
    }
}
