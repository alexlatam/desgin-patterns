<?php

namespace DecoratorTwo;

use DecoratorTwo\Contracts\CoffeeInterface;

/**
 * Esta es la clase base que va a ser decorada.
 * Esta clase implementa la interfaz que va a ser decorada.
 * Todos los decoradores deben implementar la misma interfaz que la clase base.
 * Pues deben tener el mismo comportamiento que la clase base.
 */
final class Coffee implements CoffeeInterface
{
    private int $base_cost = 10;

    public function getDescription(): string
    {
        return "Coffee";
    }

    public function getPrice(): int
    {
        return $this->base_cost;
    }
}