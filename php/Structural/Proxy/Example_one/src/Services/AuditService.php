<?php

namespace Proxy\Services;

class AuditService
{
    public function log(string $username, string $action): void
    {
        echo "User $username performed action $action" . PHP_EOL;
    }
}
