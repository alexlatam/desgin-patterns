<?php

namespace Builder\Parts;

class Door
{
    private string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }
}
