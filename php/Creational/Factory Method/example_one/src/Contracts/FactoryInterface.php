<?php 

namespace FactoryMethod\Contracts;

use FactoryMethod\Contracts\ClothesInterface;

interface FactoryInterface {
    public function factoryMethod(): ClothesInterface;
}