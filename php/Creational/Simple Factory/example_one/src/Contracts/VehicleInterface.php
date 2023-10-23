<?php 

namespace SimpleFactoryOne\Contracts;

//  Declaro una interfaz para los vehículos. 
// Esta interfaz sera implementada por todos los vehiculos que se creen.
// Esta interfaz es la que se usara en el factory para crear los vehiculos.
// esta interfaz establecera los metodos que tendran todos los vehiculos que se crearan
interface VehicleInterface {

    public function setColor($rgb): void;

    public function getColor(): string;

    public function setModel($model): void;

    public function getModel(): string;

    public function setBrand($brand): void;

    public function getBrand(): string;

    public function consumeFuel($fuel): bool;
    
}