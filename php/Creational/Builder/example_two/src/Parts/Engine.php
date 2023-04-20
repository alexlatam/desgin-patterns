<?php

namespace Builder\Parts;

class Engine
{
    private string $type;

    public function __construct(string $type) {
        $this->type = $type;
    }
}
