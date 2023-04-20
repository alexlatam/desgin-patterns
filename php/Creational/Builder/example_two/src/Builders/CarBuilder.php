<?php

declare(strict_types=1);

namespace Builder\Builders;

use Builder\Contracts\Builder;
use Builder\Contracts\Vehicle;
use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Wheel;
use Builder\Vehicles\Car;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door('black'));
        $this->car->setPart('leftDoor', new Door('black'));
        $this->car->setPart('trunkLid', new Door('black'));
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine('1200cc'));
    }

    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel('winter'));
        $this->car->setPart('wheelRF', new Wheel('winter'));
        $this->car->setPart('wheelLR', new Wheel('winter'));
        $this->car->setPart('wheelRR', new Wheel('winter'));
    }

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
