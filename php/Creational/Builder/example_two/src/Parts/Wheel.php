<?php

namespace Builder\Parts;

class Wheel
{
    private string $type;

    public function __construct(string $type) {
        $this->type = $type;
    }
}
