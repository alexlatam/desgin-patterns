<?php 

namespace Prototype\Cars;

use Prototype\Contracts\PrototypeInterface;

class Truck implements PrototypeInterface
{
    private string $model = 'truck';

    public function __clone()
    {
    }
}