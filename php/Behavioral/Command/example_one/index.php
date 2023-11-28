<?php
require_once __DIR__ . '/vendor/autoload.php';

use ObserverOne\ConfigurationManager;
use ObserverOne\Observers\ObserverA;
use ObserverOne\Observers\ObserverB;

$configuration_manager = ConfigurationManager::getInstance();

$observer_one = new ObserverA();
$observer_two = new ObserverB();

$configuration_manager->attach($observer_one);
$configuration_manager->attach($observer_two);

$configuration_manager->setDateFormat('Y-m-d');
$configuration_manager->setMoneyFormat(2);
