<?php 

namespace FactoryMethod\Employees;

use FactoryMethod\Contracts\Employee;

final class AccounterEmployee extends Employee {

    public function work(): string {
        return "Accounter is working";
    }

    public function paySalary(): bool {
        // Pay salray logic
        return true;
    }

}