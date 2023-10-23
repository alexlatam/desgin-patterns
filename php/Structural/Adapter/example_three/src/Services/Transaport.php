<?php

namespace Adapter\Services;

use Adapter\Contracts\TransaportInterface;

class Transaport implements TransaportInterface
{
    public function open(): void
    {
        var_dump("Reading a book...");
    }

    public function nextPage(): void
    {
        var_dump("Passing the next page of the book...");
    }
}