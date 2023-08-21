<?php

namespace Proxy\Services;

class SecurityService
{
    public function checkAccess(string $username, string $password): bool
    {
        if ($username === 'admin' && $password === '123456') {
            return true;
        }
        return false;
    }
}
