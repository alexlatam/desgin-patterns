<?php 

namespace SimpleFactorySecond;

use SimpleFactorySecond\Contracts\ClothesInterface;
use SimpleFactorySecond\Products\Shoe;
use SimpleFactorySecond\Products\TShirts;
use SimpleFactorySecond\Products\Pants;

// Esta sera la clase PRINCIAPAL del patron de diseño
// LA calse Factory es la que se encaragara de crear cada vehiculo
// Y como se puede ver, gracias a que se realizo la abstraccion, 
// ahora cada metodo de creacion, debe retornar un objeto que implemente la interfaz 'VehicleInterface'
class SimpleFactory
{
    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewShoe(): ClothesInterface
    {
        return new Shoe();
    }

    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewTshirt(): ClothesInterface
    {
        return new TShirts();
    }

    // Este metodo debe retornar un objeto que implemente la interfaz 'VehicleInterface'
    static public function createNewPants(): ClothesInterface
    {
        return new Pants();
    }
}