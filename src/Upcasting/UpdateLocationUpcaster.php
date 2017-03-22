<?php
declare(strict_types = 1);

namespace Upcasting;

use Geocoder\Provider\GoogleMaps;
use Ivory\HttpAdapter\CurlHttpAdapter;

final class UpdateLocationUpcaster
{
    public function castUp(Message $message): Message
    {
        if (!$message->isVersion(2)) {
            return self::migrateToVersion2($message);
        }

        return $message;
    }

    private static function migrateToVersion2(Message $message): Message
    {
        $data = $message->data();

        $geocoder = new GoogleMaps(new CurlHttpAdapter());

        $address = $geocoder->geocode($data->address)->first();

        $data->latitude = $address->getLatitude();
        $data->longitude = $address->getLongitude();

        return new Message(2, $data);
    }
}
