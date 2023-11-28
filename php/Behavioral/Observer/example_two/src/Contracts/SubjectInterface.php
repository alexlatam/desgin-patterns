<?php

namespace ObserverTwo\Contracts;

use ObserverTwo\Earthquake;

interface SubjectInterface
{
    public function subscribe(ObserverInterface $observer): void;
    public function unsubscribe(ObserverInterface $observer): void;
    public function notify(Earthquake $earthquake): void;
}