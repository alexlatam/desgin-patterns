<?php 

namespace AbstractFactory\Products;

use AbstractFactory\Contracts\ClothesInterface;

// La clase Pants al implementar la interfaz ClothesInterface, debe implementar todos los métodos de la interfaz.
class Shoes implements ClothesInterface
{

    public function getColor(): string {
        return "This is the color of the Shoes";
    }

    public function getModel(): string {
        return "This is the model of the Shoes";
    }

    public function getBrand(): string {
        return "This is the brand of the Shoes";
    }

    public function getSize(): int {
        return 10;
    }

    public function getPrice(): int {
        return 100;
    }

    public function getQuantity(): int {
        return 150;
    }
    
}