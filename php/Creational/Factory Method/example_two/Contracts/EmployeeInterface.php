<?php 

namespace FactoryMethod\Contracts;

abstract class Employee {
    private int $id;
    private int $salary;
    private bool $active;

    public function __construct(int $id, int $salary) {
        $this->id = $id;
        $this->salary = $salary;
        $this->active = true;
    }

    abstract public function work(): string;
    abstract public function paySalary(): bool;

    public function dismiss(): void {
        $this->active = false;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}