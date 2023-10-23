<?php
namespace StrategyTwo\Strategies;

use Contracts\AuthInterface;

final class OnMemoryAuthStrategy implements AuthInterface
{
    public function authenticate(string $username, string $password): string
    {
        return "On memory token for {$username}";
    }
}