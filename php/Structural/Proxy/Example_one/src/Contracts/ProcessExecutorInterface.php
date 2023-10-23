<?php

namespace Proxy\Contracts;

interface ProcessExecutorInterface
{
    public function run(string $username, string $password, string $action): void;
}
