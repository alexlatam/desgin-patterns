<?php

namespace Builder\Contracts;

// Interfaz Builder que implementaran los builders de los vehiculos concretos
interface Builder
{
    // Metodo encargado de crear el vehiculo
    public function createVehicle(): void;

    // Metodo encargado de agregar ruedas
    public function addWheel(): void;

    // Metodo encargado de agregar motor
    public function addEngine(): void;

    // Metodo encargado de agregar puertas
    public function addDoors(): void;

    // Metodo encargado de obtener el vehiculo
    public function getVehicle(): Vehicle;
}
