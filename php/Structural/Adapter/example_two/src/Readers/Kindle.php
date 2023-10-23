<?php

namespace AdapterTwo\Readers;

use AdapterTwo\Contracts\eReaderInterface;

final class Kindle implements eReaderInterface
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