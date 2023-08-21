<?php 

use FactoryMethod\Factories\PantsFactory;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, paracrear los vehiculos a partir de la fabrica simple

// Creamos un a funcion para crear un vehiculo
// Esta funcion recibe una fabrica como parametro
$newPants = new PantsFactory();
