<?php

namespace DecoratorTwo\Contracts;

/**
 * Esta interfaz define el comportamiento de la clase Base[Que sera decorada]
 * Adicionalmente define el comportamiento de los decoradores.
 */
interface CoffeeInterface
{
    public function getPrice(): int;
    public function getDescription(): string;
}
