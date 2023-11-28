<?php

namespace ObserverOne\Contracts;

/**
 * This interface defines the behavior of the subject.
 * The subject that will notify all observers when it changes.
 */
interface ObservableInterface
{
    // attach an observer to the subject.
    public function attach(ObserverInterface $observer): void;
    // detach an observer from the subject.
    public function detach(ObserverInterface $observer): void;
    // notify all observers about an event.
    public function notifyAll(string $command, mixed $source): void;
}