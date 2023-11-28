<?php

namespace StateOne\States;

use StateOne\Contracts\StateInterface;
use StateOne\Item\Microwave;

final readonly class NotHeatingState implements StateInterface
{
    public function __construct(private Microwave $microwave)
    {
    }

    public function start(int $duration): bool
    {
        $this->microwave->changeState(new HeatingState($this->microwave));
        return true;
    }

    public function stop(): bool
    {
        return false;
    }

    public function openDoor(): bool
    {
        return true;
    }
}