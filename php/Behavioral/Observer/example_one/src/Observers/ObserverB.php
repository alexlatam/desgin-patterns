<?php

namespace ObserverOne\Observers;

use ObserverOne\Contracts\ObserverInterface;

final class ObserverB implements ObserverInterface
{
    public function notify(string $command, mixed $source): void
    {
        echo "ObserverB: $command\n";
        echo "ObserverB: $source\n";
    }
}