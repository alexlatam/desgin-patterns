<?php

namespace Proxy;

use Proxy\Contracts\ProcessExecutorInterface;

class DefaultProcessExecute implements ProcessExecutorInterface
{
    public function run(string $username, string $password, string $action): void
    {
        echo "Running action $action as $username" . PHP_EOL;
    }
}
