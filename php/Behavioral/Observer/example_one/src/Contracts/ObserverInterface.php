<?php

namespace ObserverOne\Contracts;

/**
 * The Observer interface declares the update method, used by the observers.
 *
 */
interface ObserverInterface
{
    /**
     * @param string $command The description of the event.
     * @param mixed $source The source of the event.
     */
    public function notify(string $command, mixed $source): void;
}