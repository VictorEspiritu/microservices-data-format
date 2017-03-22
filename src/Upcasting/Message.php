<?php
declare(strict_types = 1);

namespace Upcasting;

final class Message
{
    private $version;
    private $data;

    public function __construct(int $version, $data)
    {
        $this->version = $version;
        $this->data = $data;
    }

    public function version(): int
    {
        return $this->version;
    }

    public function data()
    {
        return $this->data;
    }

    public function isVersion(int $version)
    {
        return $this->version === $version;
    }
}
