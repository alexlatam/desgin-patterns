<?php

namespace AdapterTwo\Readers;

use AdapterTwo\Contracts\BookInterface;

final class Book implements BookInterface
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