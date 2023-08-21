<?php

namespace Proxy;

use Proxy\Services\ProcessExcecutorInterface;

class DefaultProcessExcecute implements ProcessExcecutorInterface
{
    public function run(string $username, string $password, string $action): void
    {
        echo "Running action $action as $username" . PHP_EOL;
    }
}
