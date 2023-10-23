<?php

namespace AdapterThree\Contracts;

interface BookInterface
{
    public function open(): void;

    public function nextPage(): void;
}