<?php 

namespace FactoryMethod\Factories;

use FactoryMethod\Contracts\ClothesInterface;
use FactoryMethod\Contracts\FactoryInterface;
use FactoryMethod\Products\Shoes;

final class ShoesFactory implements FactoryInterface
{
    public function factoryMethod(): ClothesInterface {
        return new Shoes();
    }
}

