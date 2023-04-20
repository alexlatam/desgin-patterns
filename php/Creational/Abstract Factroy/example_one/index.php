<?php 

use AbstractFactory\VehiclesAbstractFactory;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// Para poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';


// Creamos una funcion que va a recibir una fabrica como paraametro
// Si nos fijamos bien, en ningun lado indicamos que tipo de fabrica va a recibir, 
// Osea que la funcion NO SABE(Y NO TIENE PORQUE SABER) que tipo de vehiculo se esta creando!!!
// EXISTE LA INVERSION DE DEPENDENCIAS!!!
// La funcion no depende de una fabrica especifica, sino que depende de una clase abstracta
// Y esta fabrica abstracta es la que va a crear los vehiculos de cualquier tipo
// El parametro que se espera es de tipo VehiclesAbstractFactory, la cual es una clase abstracta, 
// pero le enviaremos una clase que herede de esta clase abstracta, en este caso una clase especifica
function randomFunciton(VehiclesAbstractFactory $factory)
{
    // Creamos un vehiculo desde la fabrica
    $vehicle = $factory->createVehicle();

    // Del vehiculo llamamos los metodos que tiene
    echo $vehicle->getColor() . "\n";
    echo $vehicle->getModel() . "\n";
    echo $vehicle->getBrand() . "\n";
}

// Ahora llamamos a la funcion y le enviamos una fabrica especifica
// En este caso la fabrica de carros
randomFunciton(new \AbstractFactory\Factories\CarsFactory());
