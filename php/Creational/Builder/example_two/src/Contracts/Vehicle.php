<?php

namespace Builder\Contracts;

abstract class Vehicle
{
    // metodo que se encarga de agregar una parte al vehiculo
    public function setPart(string $key, object $value): void
    {
    }
}
