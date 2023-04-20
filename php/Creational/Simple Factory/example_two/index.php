<?php 

use SimpleFactorySecond\SimpleFactory;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, paracrear los vehiculos a partir de la fabrica simple

// Creamos un a funcion para crear un vehiculo
// Esta funcion recibe una fabrica como parametro
function RandomFactory(SimpleFactory $factory) {

    // Creamos un objeto de la clase Shoes a partir de un metodo estatico de la clase factory
    $shoes = $factory::createNewShoe();

    // Ahora llamamos a los metodos de cada objeto
    echo $shoes->getColor() . "\n";
    echo $shoes->getSize() . "\n";
    echo $shoes->getPrice() . "\n";

}

// Llamamos a la funcion y le pasamos como parametro una fabrica
RandomFactory(new SimpleFactory());


