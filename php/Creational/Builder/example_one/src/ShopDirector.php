<?php 

namespace Builder;

use Builder\Contracts\PcBuilder;

// Esta es la clase que sera utilizada por el cliente
class ShopDirector
{
    private PcBuilder $builder;

    public function setBuilder(PcBuilder $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function getPc(): Pc
    {
        return $this->builder->getPc();
    }

    public function buildPc(): void
    {
        $this->builder->buildPC();
    }

}