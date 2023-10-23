<?php

namespace AdapterTwo\Readers;

use AdapterTwo\Contracts\eReaderInterface;

final class PDFReader implements eReaderInterface
{
    public function turnOn(): void
    {
        var_dump("Turning on the PDF Reader...");
    }

    public function pressNextButton(): void
    {
        var_dump("Passing the next page of the PDF Reader...");
    }
}