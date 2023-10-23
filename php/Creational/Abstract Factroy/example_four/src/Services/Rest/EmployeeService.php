<?php 

namespace AbstractFactory\Services\Rest;

use AbstractFactory\Contracts\EmployeeServiceInterface;
use AbstractFactory\Contracts\VehicleInterface;

// La clase EmployeeService al implementar la interfaz VehicleInterface, debe implementar todos los métodos de la interfaz.
class EmployeeService implements EmployeeServiceInterface
{
    public function getEmployee(): array
    {
        return ["Employee 1", "Employee 2", "Employee 3"];
    }
}