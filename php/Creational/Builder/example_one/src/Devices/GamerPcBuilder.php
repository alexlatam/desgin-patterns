<?php 

namespace Builder\Devices;

use Builder\Contracts\PcBuilder;
use Builder\Pc;

// Esta es una clase concreta que implementa la interfaz PcBuilder
final class GamerPcBuilder extends PcBuilder
{

    // Creo una pc vacía desde el constructor
    public function __construct()
    {
        $this->pc = new Pc();
    }

    // Contruyo la pc gamer con valores específicos
    public function buildPC(): void
    {
        $this->pc->setCpu('i7 9700k');
        $this->pc->setGpu('RTX 2080');
        $this->pc->setRam('32GB');
        $this->pc->setHdd('1TB');
    }
}