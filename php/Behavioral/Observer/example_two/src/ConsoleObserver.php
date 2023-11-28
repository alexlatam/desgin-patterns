<?php

namespace ObserverTwo;

use ObserverTwo\Contracts\ObserverInterface;

/**
 * This is a concrete observer
 */
final class ConsoleObserver implements ObserverInterface
{
    public function update(Earthquake $earthquake): void
    {
        echo "New earthquake detected: \n";
        echo "Latitude: {$earthquake->getLatitude()}\n";
        echo "Longitude: {$earthquake->getLongitude()}\n";
        echo "Magnitude: {$earthquake->getMagnitude()}\n";
        echo "Date: {$earthquake->getDate()}\n";
    }
}