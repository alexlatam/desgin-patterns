<?php
namespace StrategyTwo\Strategies;

use Contracts\AuthInterface;

final class SQLAuthStrategy implements AuthInterface
{
    public function authenticate(string $username, string $password): string
    {
        return "SQL token for {$username}";
    }
}