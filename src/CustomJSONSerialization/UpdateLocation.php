<?php
declare(strict_types = 1);

namespace CustomJSONSerialization;

use function \GuzzleHttp\json_decode;

final class UpdateLocation
{
    private $address;
    private $latitude;
    private $longitude;

    public function __construct(string $address, float $latitude, float $longitude)
    {
        $this->address = $address;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public static function fromJson(string $rawJson): UpdateLocation
    {
        // Throws exceptions when deserialization is problematic
        $data = json_decode($rawJson);

        if (!isset($data->address)) {
            throw BadRequest::missingField('address');
        }

        if (!isset($data->latitude)) {
            throw BadRequest::missingField('latitude');
        }

        if (!isset($data->longitude)) {
            throw BadRequest::missingField('longitude');
        }

        // Cast all values to prevent warnings later on
        return new UpdateLocation(
            (string)$data->address,
            (float)$data->latitude,
            (float)$data->longitude
        );
    }

    public function address(): string
    {
        return $this->address;
    }

    public function latitude(): float
    {
        return $this->latitude;
    }

    public function longitude(): float
    {
        return $this->longitude;
    }
}
