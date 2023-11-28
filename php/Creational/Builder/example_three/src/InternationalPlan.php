<?php

namespace BuilderThree;

use BuilderThree\Entities\Accommodation;
use BuilderThree\Entities\StudyProgram;
use BuilderThree\ValueObjects\AccommodationList;

/**
 * Product
 */
final class InternationalPlan
{
    private string $from_date;
    private string $to_date;
    private StudyProgram $study_program;
    public AccommodationList $accommodation_list;

    public function __construct() {
        $accommodation_list = new AccommodationList();
    }

    public function addAccommodation(Accommodation $accommodation): void
    {
        $this->accommodation_list->add($accommodation);
    }

    public function getFromDate(): string
    {
        return $this->from_date;
    }

    public function setFromDate(string $from_date): void
    {
        $this->from_date = $from_date;
    }

    public function getToDate(): string
    {
        return $this->to_date;
    }

    public function setToDate(string $to_date): void
    {
        $this->to_date = $to_date;
    }

    public function getStudyProgram(): StudyProgram
    {
        return $this->study_program;
    }

    public function setStudyProgram(StudyProgram $study_program): void
    {
        $this->study_program = $study_program;
    }

    public function __toString(): string
    {
        return "International Plan: " . $this->getFromDate() . " - " . $this->getToDate();
    }
}