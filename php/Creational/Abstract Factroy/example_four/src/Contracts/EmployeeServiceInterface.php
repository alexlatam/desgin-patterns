<?php 

namespace AbstractFactory\Contracts;

//  Declaro una interfaz para los empleados. Que seran los productos a crear.
// Esta interfaz sera implementada por todos los empleados que se creen.
// Esta interfaz establecera los metodos que tendran todos los empleados que se crearan
interface EmployeeServiceInterface {
    public function getEmployee(): array;
}