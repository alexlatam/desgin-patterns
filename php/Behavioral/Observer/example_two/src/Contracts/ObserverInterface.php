<?php

namespace ObserverTwo\Contracts;

use ObserverTwo\Earthquake;

interface ObserverInterface
{
    public function update(Earthquake $earthquake): void;
}