<?php 

namespace AbstractFactory\Factories;

use AbstractFactory\Contracts\VehicleInterface;
use AbstractFactory\Contracts\ServicesStackAbstractFactoryInterface;
use AbstractFactory\Vehicles\Motorcycle;

class MotorcycleFactoryInterface extends ServicesStackAbstractFactoryInterface
{
    public function createVehicle(): VehicleInterface
    {
        return new Motorcycle();
    }
}