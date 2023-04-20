<?php

use FactoryMethod\Factories\AccountingDepartment;
use FactoryMethod\Factories\ITDepartment;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// Para poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Instanciamos las fabricas concretas
$it_department_factory = new ITDepartment();
$account_department_factory = new AccountingDepartment();

// Usamos las fabricas concretas para crear cada empleado
$programmer = $it_department_factory->createEmployee(1, 3500);
$accounter  = $account_department_factory->createEmployee(1, 1800);

// Ahora llamamos a los metodos de cada empleado
echo $programmer->work() . "\n";
echo "Salary: " . $programmer->getSalary() . "\n";
echo "------------------------------------\n";
echo $accounter->work() . "\n";
echo "Salary: " . $accounter->getSalary() . "\n";
