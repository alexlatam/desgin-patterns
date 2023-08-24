<?php 

namespace Composite\Product;

/**
 * Esta clase abstracta sera la base para los productos simples y los productos compuestos.
 */
abstract class AbstractProduct
{
    public function __construct(private string $name, private int $price)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function printProduct(): void
    {
        echo "\t== {$this->name} - {$this->price}$\n";
    }
}