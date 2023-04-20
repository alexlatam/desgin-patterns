<?php 

namespace AbstractFactory;

use AbstractFactory\Contracts\VehicleInterface;

// Esta sera la clase PRINCIPAL del patron de diseño
// Esta clase abstracta define los metodos que van a impklementar las facbricas especificas
// En este caso estamos abstrayendo la fabrica de vehiculos, estamos aplicando la inversion de dependencias
abstract class VehiclesAbstractFactory {
    abstract function createVehicle(): VehicleInterface;
}