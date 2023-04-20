<?php 

namespace FactoryMethod\Contracts;

// Declaro una interfaz para los productos. 
// Esta interfaz sera implementada por todos los productos que se creen.
// Esta interfaz es la que se usara para castear en el factory para crear los productos.
interface ClothesInterface {

    public function isClean(): bool;

    public function getColor(): string;

    public function getSize(): int;

    public function getPrice(): int;

    public function getQuantity(): int;

    public function getBrand(): string;    
}