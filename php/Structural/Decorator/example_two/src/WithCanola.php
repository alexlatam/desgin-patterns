<?php

namespace DecoratorTwo;

use DecoratorTwo\Contracts\CoffeeInterface;

final class WithCanola implements CoffeeInterface
{
    private int $canola_price = 4;
    private CoffeeInterface $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;

    }

    public function getPrice(): int
    {
        return $this->canola_price + $this->coffee->getPrice();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', with canola';
    }
}