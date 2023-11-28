<?php

namespace StateOne\States;

use StateOne\Contracts\StateInterface;
use StateOne\Item\Microwave;

final readonly class HeatingState implements StateInterface
{
    public function __construct(private Microwave $microwave)
    {
    }

    public function start(int $duration): bool
    {
        return false;
    }

    public function stop(): bool
    {
        $this->microwave->changeState(new NotHeatingState($this->microwave));
        return true;
    }

    public function openDoor(): bool
    {
        return false;
    }
}