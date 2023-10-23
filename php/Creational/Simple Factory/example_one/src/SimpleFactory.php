<?php 

namespace SimpleFactoryOne;

use SimpleFactoryOne\Contracts\VehicleInterface;
use SimpleFactoryOne\Vehicles\Car;
use SimpleFactoryOne\Vehicles\Motorcycle;
use SimpleFactoryOne\Vehicles\Truck;

// Esta sera la clase PRINCIAPAL del patron de diseño
// La clase Factory es la que se encaragara de crear cada vehiculo
// Y como se puede ver, gracias a que se realizo la abstraccion, 
// ahora cada metodo de creacion, debe retornar un objeto que implemente la interfaz 'VehicleInterface'
final class SimpleFactory
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