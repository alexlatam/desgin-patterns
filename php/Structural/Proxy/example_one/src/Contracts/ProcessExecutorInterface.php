<?php

namespace ProxyOne\Contracts;

/**
 * Esta interfaz debe ser implementada por la clase que sera encapsulada, wraped, por el proxy.
 * Y tambien debe ser implementada por el Proxy mismo.
 */
interface ProcessExecutorInterface
{
    public function run(string $username, string $password, string $action): void;
}
