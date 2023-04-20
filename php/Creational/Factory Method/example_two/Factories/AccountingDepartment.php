<?php 

namespace FactoryMethod\Factories;

use FactoryMethod\Contracts\Department;
use FactoryMethod\Contracts\Employee;
use FactoryMethod\Employees\AccounterEmployee;

final class AccountingDepartment extends Department {

    public function createEmployee(int $id, int $salary): Employee {
        return new AccounterEmployee($id, $salary);
    }

}