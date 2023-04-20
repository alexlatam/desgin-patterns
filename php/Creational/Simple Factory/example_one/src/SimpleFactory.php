<?php 

namespace SimpleFactory;

use SimpleFactory\Contracts\VehicleInterface;
use SimpleFactory\Vehicles\Car;
use SimpleFactory\Vehicles\Motorcycle;
use SimpleFactory\Vehicles\Truck;

// Esta sera la clase PRINCIAPAL del patron de diseño
// LA calse Factory es la que se encaragara de crear cada vehiculo
// Y como se puede ver, gracias a que se realizo la abstraccion, 
// ahora cada metodo de creacion, debe retornar un objeto que implemente la interfaz 'VehicleInterface'
class SimpleFactory
{
    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewCar(): VehicleInterface
    {
        return new Car();
    }

    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewMotorbike(): VehicleInterface
    {
        return new Motorcycle();
    }

    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewTruck(): VehicleInterface
    {
        return new Truck();
    }
}