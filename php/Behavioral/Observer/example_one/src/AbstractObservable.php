<?php

namespace ObserverOne;

use ObserverOne\Contracts\ObservableInterface;
use ObserverOne\Contracts\ObserverInterface;

class AbstractObservable implements ObservableInterface
{
    // array of observers
    private array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return (!($a === $observer));
        });
    }

    public function notifyAll(string $command, $source): void
    {
        foreach ($this->observers as $observer) {
            $observer->notify($command, $source);
        }
    }
}