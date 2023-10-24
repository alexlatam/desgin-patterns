<?php

namespace DecoratorOne;

use DecoratorOne\Contracts\CarServiceInterface;

/**
 * Esta clase es un decorador, por lo que implementa la misma interfaz que la clase que va a decorar.
 * Esta clase agrega funcionalidad a la clase que va a decorar.
 * En este caso agrega un cambio de aceite a la inspeccion basica.
 */
final class OilChangeDecorator implements CarServiceInterface
{
    protected CarServiceInterface $carService;
    protected int $cost = 29;

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
        return $this->carService->getDescription() . ", and an oil change";
    }
}