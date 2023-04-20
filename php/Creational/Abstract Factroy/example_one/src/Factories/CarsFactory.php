<?php 
namespace AbstractFactory\Factories;

use AbstractFactory\VehiclesAbstractFactory;
use AbstractFactory\Contracts\VehicleInterface;
use AbstractFactory\Vehicles\Car;

class CarsFactory extends VehiclesAbstractFactory
{
    public function createVehicle(): VehicleInterface
    {
        return new Car();
    }
}