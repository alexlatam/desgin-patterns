<?php

namespace Proxy\Services;

class RoleService
{
    public function hasRole(string $username): bool
    {
        return match ($username) {
            'admin' => true,
            'user' => false,
        };
    }
}
