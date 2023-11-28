<?php

namespace BuilderThree\Entities;

class StudyProgram
{
    public function __construct(
        private int $program_id,
        private int $university_id
    ) {
    }
}