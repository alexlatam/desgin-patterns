<?php

use DecoratorOne\BasicInspection;
use DecoratorOne\OilChangeDecorator;
use DecoratorOne\TireRotationDecorator;

require_once __DIR__ . '/vendor/autoload.php';

// Obtenemos el precio de un servicio basico
$car_service = new BasicInspection();
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + cambio de aceite
$car_service = new OilChangeDecorator($car_service);
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + rotacion de llantas
$car_service = new TireRotationDecorator($car_service);
echo $car_service->getCost();

// Obtenemos el precio de un servicio basico + cambio de aceite + rotacion de llantas
$car_service = new TireRotationDecorator(new OilChangeDecorator(new BasicInspection($car_service)));
echo $car_service->getCost();

/**
 * Como se puede ver, este patron nos permite agregar funcionalidad a un objeto sin tener que modificarlo.
 * Agregamos funcionalidad a un objeto envolviendolo en otro objeto.
 */