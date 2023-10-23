<?php

namespace Proxy\Services;

// Este es un servicio que NO forma parte del patron. Simplemente es un servicio que se usa en el ejemplo.
final class RoleService
{
    public function hasRole(string $username): bool
    {
        return match ($username) {
            'admin' => true,
            'user' => false,
        };
    }
}
