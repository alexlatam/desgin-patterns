<?php

namespace BuilderThree\Builders;

use BuilderThree\Contracts\PlanBuilderInterface;
use BuilderThree\Entities\Accommodation;
use BuilderThree\Entities\StudyProgram;
use BuilderThree\Enum\AccommodationType;
use BuilderThree\LocalPlan;

final class LocalPlanBuilder implements PlanBuilderInterface
{
    private LocalPlan $plan;

    public function __construct()
    {
        $this->reset();
    }

    public function definePeriod(string $from_date, string $to_date): void
    {
        $this->plan->setDates($from_date, $to_date);
    }

    public function defineStudyProgram(int $program_id, int $university_id): void
    {
        $study_program = new StudyProgram($program_id, $university_id);
        $this->plan->setStudyProgram($study_program);
    }

    public function defineAccommodation(AccommodationType $type, string $from_date, string $to_date): bool
    {
        $accommodation = new Accommodation($type, $from_date, $to_date);
        $this->plan->setAccommodation($accommodation);
        return true;
    }

    public function reset(): void
    {
        $this->plan = new LocalPlan();
    }

    public function getPlan(): LocalPlan
    {
        $current_plan = $this->plan;
        $this->reset();
        return $current_plan;
    }
}