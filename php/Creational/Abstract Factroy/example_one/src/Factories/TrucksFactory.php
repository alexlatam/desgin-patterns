<?php 
namespace AbstractFactory\Factories;

use AbstractFactory\VehiclesAbstractFactory;
use AbstractFactory\Contracts\VehicleInterface;
use AbstractFactory\Vehicles\Truck;

class TrucksFactory extends VehiclesAbstractFactory
{
    public function createVehicle(): VehicleInterface
    {
        return new Truck();
    }
}