<?php

namespace AdapterThree\Services;

use AdapterThree\Contracts\eReaderInterface;

class Kindle implements eReaderInterface
{
    public function turnOn(): void
    {
        var_dump("Turning on the kindle...");
    }

    public function pressNextButton(): void
    {
        var_dump("Passing the next page of the Kindle...");
    }
}