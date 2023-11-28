<?php

namesapce StateOne\Contracts;

interface StateInterface
{
    public function start(int $duration): bool;
}