<?php
declare(strict_types = 1);

namespace CustomJSONSerialization;

final class BadRequest extends \RuntimeException
{
    public static function missingField(string $fieldName): BadRequest
    {
        return new self(
            sprintf('Malformed data - field "%s" is missing', $fieldName)
        );
    }
}
