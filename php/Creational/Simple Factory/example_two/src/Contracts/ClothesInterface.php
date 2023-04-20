<?php 

namespace SimpleFactory\Contracts;

//  Declaro una interfaz para los vehículos. 
// Esta interfaz sera implementada por todos los vehiculos que se creen.
// Esta interfaz es la que se usara en el factory para crear los vehiculos.
// esta interfaz establecera los metodos que tendran todos los vehiculos que se crearan
interface ClothesInterface {

    public function isClean(): bool;

    public function getColor(): string;

    public function getSize(): int;

    public function getPrice(): int;

    public function getQuantity(): int;

    public function getBrand(): string;    
}