<?php

declare(strict_types=1);

namespace Builder\Builders;

use Builder\Contracts\Builder;
use Builder\Contracts\Vehicle;
use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Wheel;
use Builder\Vehicles\Truck;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door('grey'));
        $this->truck->setPart('leftDoor', new Door('grey'));
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine('5000cc'));
    }

    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel('summer'));
        $this->truck->setPart('wheel2', new Wheel('summer'));
        $this->truck->setPart('wheel3', new Wheel('summer'));
        $this->truck->setPart('wheel4', new Wheel('summer'));
        $this->truck->setPart('wheel5', new Wheel('summer'));
        $this->truck->setPart('wheel6', new Wheel('summer'));
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
