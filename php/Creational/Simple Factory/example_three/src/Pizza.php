<?php 

namespace SimpleFactory;

// Clase pizza
class Pizza {

    private int $slices;

    public function __construct(int $slices) {
        $this->slices = $slices;
    }

    public function getSlices(): int {
        return $this->slices;
    }
    
}