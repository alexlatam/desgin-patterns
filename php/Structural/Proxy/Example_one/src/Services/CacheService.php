<?php

namespace Proxy\Services;

class CacheService
{
    public function set(string $username): string
    {
        return "Set cache value for $username";
    }
}
