<?php 

namespace SimpleFactorySecond\Products;

use SimpleFactorySecond\Contracts\ClothesInterface;

// La clase Car al implementar la interfaz VehicleInterface, debe implementar todos los métodos de la interfaz.
class Shoe implements ClothesInterface
{
    public function isClean(): bool {
        return true;
    }

    public function getColor(): string {
        return "This is the color of the shoe";
    }

    public function getSize(): int {
        return 10;
    }

    public function getPrice(): int {
        return 100;
    }

    public function getQuantity(): int {
        return 15;
    }
    
    public function getBrand(): string {
        return "This is the brand of the shoe";
    }
}