<?php

use SimpleFactoryOne\SimpleFactory;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, paracrear los vehiculos a partir de la fabrica simple
$factory = new SimpleFactory();

// Creamos un objeto de la clase Motorbike a partir del metodo estatico para la creacion de este tipo de vehiculo en particular
$motorbike = $factory::createNewMotorbike();
$truck = $factory::createNewTruck();

// Ahora llamamos a los metodos de cada objeto
echo $motorbike->getColor() . "\n";
echo $motorbike->getModel() . "\n";
echo $motorbike->getBrand() . "\n";
echo "------------------------------------\n";
echo $truck->getColor() . "\n";
echo $truck->getModel() . "\n";
echo $truck->getBrand() . "\n";
