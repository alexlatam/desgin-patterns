<?php

namespace BuilderThree;

use BuilderThree\Entities\Accommodation;
use BuilderThree\Entities\StudyProgram;

/**
 * Product
 */
final class LocalPlan
{
    private string $from_date;
    private string $to_date;
    private StudyProgram $study_program;
    public Accommodation $accommodation;

    public function getFromDate(): string
    {
        return $this->from_date;
    }

    public function getToDate(): string
    {
        return $this->to_date;
    }

    public function setDates(string $from_date, string $to_date): void
    {
        $this->from_date = $from_date;
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

    public function getAccommodation(): Accommodation
    {
        return $this->accommodation;
    }

    public function setAccommodation(Accommodation $accommodation): void
    {
        $this->accommodation = $accommodation;
    }

    public function __toString(): string
    {
        return "Local Plan: " . $this->getFromDate() . " - " . $this->getToDate();
    }

}