<?php

namespace Proxy\Services;

// Este es un servicio que NO forma parte del patron. Simplemente es un servicio que se usa en el ejemplo.
final class AuditService
{
    public function log(string $username, string $action): void
    {
        echo "User $username performed action $action" . PHP_EOL;
    }
}
