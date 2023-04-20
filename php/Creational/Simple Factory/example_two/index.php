<?php

use SimpleFactory\SimpleFactory;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// Para poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, para crear la ropa a partir de la fabrica simple
$factory = new SimpleFactory();

// Creo los objetos
$shoes = $factory::create('shoes');
$pants = $factory::create('pants');

// Ahora llamamos a los metodos de cada objeto
echo $shoes->getColor() . "\n";
echo $shoes->getSize() . "\n";
echo $shoes->getPrice() . "\n";
echo "------------------------------------\n";
echo $pants->getColor() . "\n";
echo $pants->getSize() . "\n";
echo $pants->getPrice() . "\n";
