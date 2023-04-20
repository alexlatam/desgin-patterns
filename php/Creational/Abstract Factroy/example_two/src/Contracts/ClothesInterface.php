<?php 

namespace AbstractFactory\Contracts;

// Declaro una interfaz para los productos. 
// Esta interfaz sera implementada por todos los productos que se creen.
interface ClothesInterface {

    public function getColor(): string;

    public function getModel(): string;

    public function getBrand(): string;

    public function getSize(): int;

    public function getPrice(): int;

    public function getQuantity(): int;

    
}