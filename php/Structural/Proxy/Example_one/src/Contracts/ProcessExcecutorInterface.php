<?php

namespace Proxy\Services;

interface ProcessExcecutorInterface
{
    public function run(string $username, string $password, string $action): void;
}
