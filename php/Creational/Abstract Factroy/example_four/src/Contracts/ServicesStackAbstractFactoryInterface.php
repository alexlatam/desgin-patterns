<?php 

namespace AbstractFactory\Contracts;

// Esta sera la clase PRINCIPAL del patron de diseño
// Esta clase abstracta define los metodos que van a impklementar las facbricas especificas
// En este caso estamos abstrayendo la fabrica de vehiculos, estamos aplicando la inversion de dependencias
interface ServicesStackAbstractFactoryInterface {
    public function getEmployeeService(): EmployeeServiceInterface;

    public function getProductService(): ProductServiceInterface;
}