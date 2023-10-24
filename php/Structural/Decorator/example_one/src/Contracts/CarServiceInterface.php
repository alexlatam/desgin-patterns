<?php

namespace DecoratorOne\Contracts;

/**
 * Esta interfaz define el comportamiento de la clase Base[Que sera decorada]
 * Adicionalmente define el comportamiento de los decoradores.
 */
interface CarServiceInterface
{
    public function getCost(): int;
    public function getDescription(): string;
}
