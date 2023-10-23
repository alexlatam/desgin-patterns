<?php 
namespace AbstractFactory\Factories;

use AbstractFactory\Contracts\VehicleInterface;
use AbstractFactory\Contracts\ServicesStackAbstractFactoryInterface;
use AbstractFactory\Vehicles\EmployeeService;

class CarsFactoryInterface extends ServicesStackAbstractFactoryInterface
{
    public function createVehicle(): VehicleInterface
    {
        return new EmployeeService();
    }
}