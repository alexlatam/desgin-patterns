<?php

namespace StateOne\Contracts;

interface StateInterface
{
    public function start(int $duration): bool;
    public function stop(): bool;
    public function openDoor(): bool;
}