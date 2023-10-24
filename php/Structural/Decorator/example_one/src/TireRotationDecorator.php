<?php

namespace DecoratorOne;

use DecoratorOne\Contracts\CarServiceInterface;

final class TireRotationDecorator implements CarServiceInterface
{
    protected CarServiceInterface $carService;
    protected int $cost = 10;
    
    public function __construct(CarServiceInterface $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return $this->carService->getCost() + $this->cost;
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . ", and a tire rotation";
    }
}