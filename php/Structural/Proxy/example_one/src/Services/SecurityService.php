<?php

namespace ProxyOne\Services;

// Este es un servicio que NO forma parte del patron. Simplemente es un servicio que se usa en el ejemplo.
final class SecurityService
{
    public function checkAccess(string $username, string $password): bool
    {
        if ($username === 'admin' && $password === '123456') {
            return true;
        }
        return false;
    }
}
