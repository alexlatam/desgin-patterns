<?php

namespace BuilderThree\ValueObjects;

use BuilderThree\Entities\Accommodation;

final class AccommodationList
{
    private array $accommodation_list = [];

    public function __construct()
    {
    }

    public function add(Accommodation $accommodation): void
    {
        $this->accommodation_list[] = $accommodation;
    }

    public function get(): array
    {
        return $this->accommodation_list;
    }

    public function count(): int
    {
        return count($this->accommodation_list);
    }
}