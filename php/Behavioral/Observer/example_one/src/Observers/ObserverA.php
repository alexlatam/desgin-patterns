<?php

namespace ObserverOne\Observers;

use ObserverOne\Contracts\ObserverInterface;

final class ObserverA implements ObserverInterface
{
    public function notify(string $command, mixed $source): void
    {
        echo "ObserverA: $command\n";
        echo "ObserverA: $source\n";
    }
}