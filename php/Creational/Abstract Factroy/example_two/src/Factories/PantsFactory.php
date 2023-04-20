<?php 
namespace AbstractFactory\Factories;

use AbstractFactory\ClothesAbstractFactory;
use AbstractFactory\Contracts\ClothesInterface;
use AbstractFactory\Products\Pants;

class PantsFactory extends ClothesAbstractFactory
{
    public function createClothes(): ClothesInterface
    {
        return new Pants();
    }
}