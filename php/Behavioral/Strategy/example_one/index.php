<?php
require_once __DIR__ . '/vendor/autoload.php';

use StrategyOne\Strategies\LogToDatabase;
use StrategyOne\Strategies\LogToFile;
use StrategyOne\Strategies\LogToXWebService;

/**
 * Creo una instancia de la clase App.
 * Esta clase es la que se encarga de hacer el log usando la estrategia que se le pase
*/
$app = new \StrategyOne\App();

// Hago el log usando la estrategia LogToFile
$app->log('[Log]: Some information here', new LogToFile());

// Hago el log usando la estrategia LogToDatabase
$app->log('[Log]: Some information here', new LogToDatabase());

// Hago el log usando la estrategia LogToXWebService
$app->log('[Log]: Some information here', new LogToXWebService());