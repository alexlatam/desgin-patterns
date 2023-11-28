<?php

namespace BuilderThree\Contracts;

use BuilderThree\Enum\AccommodationType;

interface PlanBuilderInterface
{

    public function definePeriod(string $from_date, string $to_date): void;

    public function defineStudyProgram(int $program_id, int $university_id): void;

    public function defineAccommodation(AccommodationType $type, string $from_date, string $to_date): bool;

    public function reset(): void;

}