<?php

namespace DecoratorTwo;

use DecoratorTwo\Contracts\CoffeeInterface;

/**
 * Esta clase es un decorador, por lo que implementa la misma interfaz que la clase que va a decorar.
 * Esta clase agrega funcionalidad a la clase que va a decorar.
 * En este caso agrega un cambio de aceite a la inspeccion basica.
 */
final class WithChocolate implements CoffeeInterface
{
    private int $chocolate_price = 7;
    private CoffeeInterface $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getPrice(): int
    {
        return $this->chocolate_price + $this->coffee->getPrice();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', with chocolate';
    }
}