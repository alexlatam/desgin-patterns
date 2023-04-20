<?php 

namespace AbstractFactory\Factories;

use AbstractFactory\VehiclesAbstractFactory;
use AbstractFactory\Contracts\VehicleInterface;
use AbstractFactory\Vehicles\Motorcycle;

class MotorcycleFactory extends VehiclesAbstractFactory
{
    public function createVehicle(): VehicleInterface
    {
        return new Motorcycle();
    }
}