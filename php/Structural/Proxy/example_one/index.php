<?php

require_once __DIR__ . '/vendor/autoload.php';

use ProxyOne\Contracts\ProcessExecutorInterface;
use ProxyOne\DefaultProcessExecute;
use ProxyOne\Proxies\ProcessExecutorProxy;

final readonly class App
{
    public function __construct(private ProcessExecutorInterface $executor){
    }

    public function execute(): void
    {
        $this->executor->run(username: "alex", password: "user1234", action: "login");
    }
}

/**
 * Creamos el proxy, al cual le pasamos la clase por defecto a la cual va a encapsular.
 */
$proxy = new ProcessExecutorProxy(new DefaultProcessExecute());

/**
 * Creamos una instancia de la clase cliente y le pasamos el proceso por defecto.
 */
$app = new App(new DefaultProcessExecute());
$app->execute();

/**
 * Creamos una instancia de la clase cliente y le pasamos el proxy.
 */
$app = new App($proxy);
$app->execute();