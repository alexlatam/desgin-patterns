<?php 

namespace Builder\Devices;

use Builder\Contracts\PcBuilder;
use Builder\Pc;

// Esta es una clase concreta que implementa la interfaz PcBuilder
final class BudgetPcBuilder extends PcBuilder
{

    // Creo una pc vacía desde el constructor
    public function __construct()
    {
        $this->pc = new Pc();
    }

    // Contruyo la pc gamer con valores específicos
    public function buildPC(): void
    {
        $this->pc->setCpu('i3');
        $this->pc->setGpu('');
        $this->pc->setRam('8GB');
        $this->pc->setHdd('250GB');
    }
}