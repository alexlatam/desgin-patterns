<?php

use SimpleFactory\Pizzeria;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, paracrear los vehiculos a partir de la fabrica simple
$factory = new Pizzeria();

// Creamos un objeto de la clase Motorbike a partir del metodo estatico para la creacion de este tipo de vehiculo en particular
$small    = $factory->createSmallPizza();
$familiar = $factory->createFamiliarPizza();

// Ahora llamamos a los metodos de cada objeto
echo "Total slices: " . $familiar->getSlices() . "\n";
echo "------------------------------------\n";
echo "Total slices: " . $small->getSlices() . "\n";
