<?php

use StrategyTwo\AuthProvider;
use StrategyTwo\Strategies\BearerTokenStrategy;
use StrategyTwo\Strategies\OnMemoryAuthStrategy;

require_once __DIR__ . '/vendor/autoload.php';


/**
 * Creo una instancia de la clase AuthProvider.
 * Inmediatamente le asigno la estrategia a usar para la autenticacion
*/
$auth_provider = new AuthProvider(new BearerTokenStrategy());

$username = 'alex123';
$password = '123456';

/**
 * Llamo al metodo authenticate de la clase AuthProvider
 * y le paso los datos de autenticacion
 * El proveedor de autenticacion usara la estrategia que le asignamos anteriormente
 */
$token = $auth_provider->authenticate($username, $password);

echo $token . PHP_EOL;

/**
 * Ahora cambio la estrategia de autenticacion
 * y vuelvo a llamar al metodo authenticate
 */
$auth_provider->setStrategy(new OnMemoryAuthStrategy());

$token = $auth_provider->authenticate($username, $password);

echo $token . PHP_EOL;
