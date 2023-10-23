<?php
require __DIR__ . '/vendor/autoload.php';

use FactoryMethod\Factories\PantsFactory;
use \FactoryMethod\Factories\ShoesFactory;
use \FactoryMethod\Factories\TShirtsFactory;
use FactoryMethod\EnumClothes;

// Creo una variable para elegir que factory quiero crear.
// Esto puede venir desde el body de un request HTTP, o desde un archivo de configuracion .env
$factory_to_create = EnumClothes::Pants;

// Creo un switch para elegir que factory quiero crear.
// Este switch se puede evitar usando ReflectionClass
switch ($factory_to_create) {
    case EnumClothes::Pants:
        $pants_factory = new PantsFactory();
        $pants = $pants_factory->factoryMethod();
        echo "The Pants is clean: " . $pants->isClean() . "\n";
        echo "The Pants color is: " . $pants->getColor() . "\n";
        echo "The Pants size is: " . $pants->getSize() . "\n";
        echo "The Pants price is: " . $pants->getPrice() . "\n";
        echo "The Pants quantity is: " . $pants->getQuantity() . "\n";
        echo "The Pants brand is: " . $pants->getBrand() . "\n";
        break;
    case EnumClothes::Shirt:
        $shirts_factory = new TShirtsFactory();
        $shirts = $shirts_factory->factoryMethod();
        echo "The Shirt is clean: " . $shirts->isClean() . "\n";
        echo "The Shirt color is: " . $shirts->getColor() . "\n";
        echo "The Shirt size is: " . $shirts->getSize() . "\n";
        echo "The Shirt price is: " . $shirts->getPrice() . "\n";
        echo "The Shirt quantity is: " . $shirts->getQuantity() . "\n";
        echo "The Shirt brand is: " . $shirts->getBrand() . "\n";
        break;
    case EnumClothes::Shoes:
        $shoes = new ShoesFactory();
        $shoes->factoryMethod();
        break;
    default:
        echo "This Clothes is not available";
        break;
}