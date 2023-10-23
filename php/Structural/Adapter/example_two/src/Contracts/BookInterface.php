<?php

namespace AdapterTwo\Contracts;

interface BookInterface
{
    public function open(): void;

    public function nextPage(): void;
}