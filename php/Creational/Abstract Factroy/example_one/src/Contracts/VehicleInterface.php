<?php 

namespace AbstractFactory\Contracts;

//  Declaro una interfaz para los vehículos. Que seran los productos a crear.
// Esta interfaz sera implementada por todos los vehiculos que se creen.
// Esta interfaz es la que se usara en el factory para crear los vehiculos.
// Esta interfaz establecera los metodos que tendran todos los vehiculos que se crearan
interface VehicleInterface {

    public function setColor($rgb): void;

    public function getColor(): string;

    public function setModel($model): void;

    public function getModel(): string;

    public function setBrand($brand): void;

    public function getBrand(): string;

    public function consumeFuel($fuel): bool;
    
}