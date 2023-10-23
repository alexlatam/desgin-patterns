<?php 

namespace SimpleFactory;

use Exception;
use SimpleFactory\Contracts\ClothesInterface;
use SimpleFactory\Products\Shoes;
use SimpleFactory\Products\TShirts;
use SimpleFactory\Products\Pants;

// Esta sera la clase PRINCIAPAL del patron de diseño
// La calse Factory es la que se encaragara de crear cada tipo de ropa
// Y como se puede ver, gracias a que se realizo la abstraccion, 
// ahora cada metodo de creacion, debe retornar un objeto que implemente la interfaz 'ClothesInterface'
final class SimpleFactory
{
    static public function create($type): ClothesInterface {
        switch ($type) {
            case 'shoes': return new Shoes();
            case 'pants': return new Pants();
            case 'tshirts': return new TShirts();
            default:
                throw new Exception('Wrong user type passed.');
        }
    }
}

    