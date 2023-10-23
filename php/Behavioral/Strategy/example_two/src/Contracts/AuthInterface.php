<?php

namespace StrategyTwo\Contracts;

namespace Contracts;

interface AuthInterface
{
    public function authenticate(string $username, string $password): string;
}