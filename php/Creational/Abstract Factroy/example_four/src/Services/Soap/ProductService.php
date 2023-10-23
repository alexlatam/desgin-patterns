<?php 

namespace AbstractFactory\Services\Soap;

use AbstractFactory\Contracts\EmployeeServiceInterface;
use AbstractFactory\Contracts\ProductServiceInterface;
use AbstractFactory\Contracts\VehicleInterface;

// La clase EmployeeService al implementar la interfaz VehicleInterface, debe implementar todos los métodos de la interfaz.
class ProductService implements ProductServiceInterface
{
    public function getProducts(): array
    {
        return ["Product 1", "Product 2", "Product 3"];
    }
}