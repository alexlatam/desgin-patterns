<?php 

namespace SimpleFactory\Products;

use SimpleFactory\Contracts\ClothesInterface;

// La clase Car al implementar la interfaz VehicleInterface, debe implementar todos los métodos de la interfaz.
class Pants implements ClothesInterface
{
    public function isClean(): bool {
        return true;
    }

    public function getColor(): string {
        return "This is the color of the Pants";
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
        return "This is the brand of the Pants";
    }
}