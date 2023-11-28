<?php

namespace ObserverTwo;

/**
 * This is the object that will be notified
 * When an earthquake occurs
 */
final class Earthquake
{
    public function __construct(
        private float $latitude,
        private float $longitude,
        private float $magnitude,
        private string $date
    ){
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getMagnitude(): float
    {
        return $this->magnitude;
    }

    public function setMagnitude(float $magnitude): void
    {
        $this->magnitude = $magnitude;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}