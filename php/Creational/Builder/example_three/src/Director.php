<?php

namespace BuilderThree;

use BuilderThree\Contracts\PlanBuilderInterface;
use BuilderThree\Enum\AccommodationType;

final class Director
{
    public function __construct(private PlanBuilderInterface $builder)
    {
    }

    public function MBAPlan(): void
    {
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime('+1 year'));
        $program_id = 1;
        $university_id = 4;

        $this->builder->reset();
        $this->builder->definePeriod($start_date, $end_date);
        $this->builder->defineStudyProgram($program_id, $university_id);
        $this->builder->defineAccommodation(AccommodationType::HOTEL, $start_date, $end_date);
    }

    public function setBuilder(PlanBuilderInterface $builder): void
    {
        $this->builder = $builder;
        $this->builder->reset();
    }

}