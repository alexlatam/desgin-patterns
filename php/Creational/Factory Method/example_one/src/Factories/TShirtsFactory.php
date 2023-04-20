<?php 

namespace FactoryMethod\Factories;

use FactoryMethod\Contracts\ClothesInterface;
use FactoryMethod\Contracts\FactoryInterface;
use FactoryMethod\Products\TShirts;

final class TShirtsFactory implements FactoryInterface
{
    public function factoryMethod(): ClothesInterface {
        return new TShirts();
    }
}

