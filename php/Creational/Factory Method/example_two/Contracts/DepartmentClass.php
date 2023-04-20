<?php 

namespace FactoryMethod\Contracts;

abstract class Department {
    public abstract function createEmployee(int $id, int $salary): Employee;

    public function fire(int $id, int $salary): void {
        $employee = $this->createEmployee($id, $salary);
        $employee->paySalary();
        $employee->dismiss();
    }
}

