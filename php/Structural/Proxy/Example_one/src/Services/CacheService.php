<?php

namespace Proxy\Services;

// Este es un servicio que NO forma parte del patron. Simplemente es un servicio que se usa en el ejemplo.
final class CacheService
{
    public function set(string $username): string
    {
        return "Set cache value for $username";
    }
}
