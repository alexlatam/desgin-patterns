<?php 

namespace Composite\Product;

class SimpleProduct extends AbstractProduct
{
    public function __construct(private string $name, private int $price, private string $brand)
    {
        parent::__construct($name, $price);
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}