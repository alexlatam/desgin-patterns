<?php 

namespace FactoryMethod\Employees;

use FactoryMethod\Contracts\Employee;

final class ProgrammerEmployee extends Employee {

    public function work(): string {
        return "Programmer is working";
    }

    public function paySalary(): bool {
        // Pay salray logic
        return true;
    }

}