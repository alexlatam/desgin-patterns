<?php

namespace DecoratorOne;

use DecoratorOne\Contracts\CarServiceInterface;

/**
 * Esta es la clase base que va a ser decorada.
 * Esta clase implementa la interfaz que va a ser decorada.
 * Todos los decoradores deben implementar la misma interfaz que la clase base.
 * Pues deben tener el mismo comportamiento que la clase base.
 */
final class BasicInspection implements CarServiceInterface
{
    protected int $base_cost = 25;
    public function getCost(): int
    {
        return $this->base_cost;
    }

    public function getDescription(): string
    {
        return "Basic inspection for Cars";
    }
}