<?php

namespace ObserverTwo;

use ObserverTwo\Contracts\ObserverInterface;
use ObserverTwo\Contracts\SubjectInterface;

/**
 * Concrete Subject
 * This is the class that will be observed
 * This class will notify all observers when an earthquake occurs
 */
final class GeologicalService implements SubjectInterface
{
    private array $observers;

    public function __construct(
    ){
        $this->observers = [];
    }

    public function subscribe(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function unsubscribe(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return (! ($a === $observer));
        });
    }

    public function notify(Earthquake $earthquake): void
    {
        if (count($this->observers) === 0) {
            echo "No observers to notify...\n";
            return;
        }

        echo "Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($earthquake);
        }
        echo "Done notifying observers...\n";
    }

    // This method will be called when an earthquake occurs
    public function tremble(): void
    {
        $earthquake = new Earthquake(
            latitude: 0.0,
            longitude: 0.0,
            magnitude: 9.0,
            date: date('Y-m-d H:i:s')
        );
        $this->notify($earthquake);
    }
}