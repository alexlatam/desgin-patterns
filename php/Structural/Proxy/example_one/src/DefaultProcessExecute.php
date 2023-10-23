<?php

namespace ProxyOne;

use ProxyOne\Contracts\ProcessExecutorInterface;

/**
 * Esta es la clase que sera usada por el proxy para ejecutar los procesos.
 * Esta clase sera encapsulada, wraped, por el proxy.
 * El proxy ejecutara acciones antes y depues de ejecutar los procesos de esta clase. Especificamente el metodo run
 */
final class DefaultProcessExecute implements ProcessExecutorInterface
{
    public function run(string $username, string $password, string $action): void
    {
        echo "Running action $action as $username" . PHP_EOL;
    }
}
