<?php

namespace StateOne\Item;

use StateOne\Contracts\StateInterface;
use StateOne\States\NotHeatingState;

final class Microwave implements StateInterface
{
    private StateInterface $current_state;

    public function __construct()
    {
        $this->current_state = new NotHeatingState($this);
    }

    public function start(int $duration): bool
    {
        echo '[Start] Current state ' . $this->current_state::class . PHP_EOL;
        return $this->current_state->start($duration);
    }

    public function stop(): bool
    {
        echo '[Stop] Current state ' . $this->current_state::class . PHP_EOL;
        return $this->current_state->stop();
    }

    public function openDoor(): bool
    {
        echo '[Open Door] Current state ' . $this->current_state::class . PHP_EOL;
        return $this->current_state->openDoor();
    }

    public function changeState(StateInterface $new_state): void
    {
        $this->current_state = $new_state;
    }
}