<?php 

namespace Builder\Contracts;

use Builder\Pc;

// Esta es la interfaz que deben implementar las clases concretas
// ESte es el Builder en si
abstract class PcBuilder
{
    protected Pc $pc;

    public function getPc(): Pc 
    {
        return $this->pc;
    }

    abstract function buildPC(): void;
}