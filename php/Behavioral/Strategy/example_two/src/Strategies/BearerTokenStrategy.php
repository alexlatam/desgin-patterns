<?php
namespace StrategyTwo\Strategies;

use Contracts\AuthInterface;

final class BearerTokenStrategy implements AuthInterface
{
    public function authenticate(string $username, string $password): string
    {
        return "Bearer token for {$username}";
    }
}