<?php 

namespace FactoryMethod\Factories;

use FactoryMethod\Contracts\ClothesInterface;
use FactoryMethod\Contracts\FactoryInterface;
use FactoryMethod\Products\Pants;

final class PantsFactory implements FactoryInterface
{
    public function factoryMethod(): ClothesInterface {
        return new Pants();
    }
}

