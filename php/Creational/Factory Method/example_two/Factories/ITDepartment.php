<?php 

namespace FactoryMethod\Factories;

use FactoryMethod\Contracts\Department;
use FactoryMethod\Contracts\Employee;
use FactoryMethod\Employees\ProgrammerEmployee;

final class ITDepartment extends Department {

    public function createEmployee(int $id, int $salary): Employee {
        return new ProgrammerEmployee($id, $salary);
    }

}