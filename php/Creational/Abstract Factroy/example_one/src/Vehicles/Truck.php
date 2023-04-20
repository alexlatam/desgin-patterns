<?php 

namespace AbstractFactory\Vehicles;

use AbstractFactory\Contracts\VehicleInterface;

// La clase TRuck al implementar la interfaz VehicleInterface, debe implementar todos los métodos de la interfaz.
class Truck implements VehicleInterface
{
    public function setColor($rgb): void {
        // Code
    }

    public function getColor(): string {
        return "This is the color of the car";
    }

    public function setModel($model): void {
        // Code
    }

    public function getModel(): string {
        return "This is the model of the car";
    }

    public function setBrand($brand): void {
        // Code
    }

    public function getBrand(): string {
        return "This is the brand of the car";
    }

    public function consumeFuel($fuel): bool {
        $condition = true;
        if ($condition) {
            return true;
        }
        return false;
    }
}