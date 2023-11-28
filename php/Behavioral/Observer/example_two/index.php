<?php

use ObserverTwo\ConsoleObserver;
use ObserverTwo\GeologicalService;

require_once __DIR__ . '/vendor/autoload.php';

$observer = new ConsoleObserver();

$geological_service = new GeologicalService();
$geological_service->subscribe($observer);

$geological_service->tremble();

$geological_service->unsubscribe($observer);
$geological_service->tremble();
