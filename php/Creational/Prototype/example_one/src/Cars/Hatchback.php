<?php 

namespace Prototype\Cars;

use Prototype\Contracts\PrototypeInterface;

class Hatchback implements PrototypeInterface
{
    private string $model = 'hatchback';

    public function __clone()
    {
    }
}