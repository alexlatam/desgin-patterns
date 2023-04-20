<?php

use Builder\Builders\CarBuilder;
use Builder\Builders\TruckBuilder;
use Builder\Director;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// Para poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Instanciamos las fabricas concretas
$director = new Director(); // instancio el director, el cual se encargara de crear mis pc's

/**** Contruyo un auto ****/
$car = $director->build(new CarBuilder()); // indico cual vehiculo voy a construir

/**** Contruyo un camion ****/
$truck = $director->build(new TruckBuilder()); // indico cual vehiculo voy a construir
