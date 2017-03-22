<?php
declare(strict_types = 1);

namespace Util;

use Psr\Http\Message\ResponseInterface;

final class Response
{
    public static function printIt(ResponseInterface $response)
    {
        echo "HTTP/1.1 {$response->getStatusCode()} {$response->getReasonPhrase()}\n";
        foreach ($response->getHeaders() as $name => $values) {
            foreach ($values as $value) {
                echo "$name: $value\n";
            }
        }
        echo "\n";
        echo $response->getBody();
    }
}
