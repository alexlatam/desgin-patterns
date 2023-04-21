<?php 

namespace Prototype\Cars;

use Prototype\Contracts\PrototypeInterface;

class Sedan implements PrototypeInterface
{
    private string $model = 'sedan';

    public function __clone()
    {
    }
}