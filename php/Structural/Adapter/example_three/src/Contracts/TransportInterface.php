<?php

namespace Adapter\Contracts;

interface TransportInterface
{
    public function start(): void;

    public function run(): void;

    public function stop(): void;
}