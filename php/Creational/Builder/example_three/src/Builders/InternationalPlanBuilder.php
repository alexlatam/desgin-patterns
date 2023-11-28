<?php

namespace BuilderThree\Builders;

use BuilderThree\Contracts\PlanBuilderInterface;
use BuilderThree\Entities\Accommodation;
use BuilderThree\Entities\StudyProgram;
use BuilderThree\Enum\AccommodationType;
use BuilderThree\InternationalPlan;

final class InternationalPlanBuilder implements PlanBuilderInterface
{
    private InternationalPlan $plan;

    public function definePeriod(string $from_date, string $to_date): void
    {
        $this->plan->setFromDate($from_date);
        $this->plan->setToDate($to_date);
    }

    public function defineStudyProgram(int $program_id, int $university_id): void
    {
        $study_program = new StudyProgram($program_id, $university_id);
        $this->plan->setStudyProgram($study_program);
    }

    public function defineAccommodation(AccommodationType $type, string $from_date, string $to_date): bool
    {
        $result = false;

        if ($type == AccommodationType::HOTEL) {

            // calculate the difference between dates
            $diff = abs(strtotime($from_date) - strtotime($to_date));
            if ($diff < 15) {
                $result = true;
                $accommodation = new Accommodation($type, $from_date, $to_date);
                $this->plan->addAccommodation($accommodation);
            }
        } else {
            $accommodation = new Accommodation($type, $from_date, $to_date);
            $this->plan->addAccommodation($accommodation);
            return true;
        }

        return $result;
    }

    public function reset(): void
    {
        $this->plan = new InternationalPlan();
    }

    public function getPlan(): InternationalPlan
    {
        $current_plan = $this->plan;
        $this->reset();
        return $current_plan;
    }
}