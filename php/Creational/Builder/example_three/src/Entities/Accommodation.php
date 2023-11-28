<?php

namespace BuilderThree\Entities;

use BuilderThree\Enum\AccommodationType;

class Accommodation
{
    public function __construct(
        private AccommodationType $type,
        private string $from_date,
        private string $to_date
    ) {
    }

}