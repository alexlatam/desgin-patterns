<?php

namespace AdapterTwo\Contracts;

/**
 * Esta interface NO es igual a la interfaz BookInterface,
 * Y el cliente espera una clase que implemente la interfaz BookInterface
 * Por lo tanto esta interfaz debe ser adaptada a la interfaz BookInterface
 */
interface eReaderInterface
{
    public function turnOn(): void;

    public function pressNextButton(): void;
}