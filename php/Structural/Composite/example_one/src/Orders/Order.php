<?php 

namespace Composite\Orders;

use Composite\Product\AbstractProduct;

class Order
{
    private array $products = [];

    public function __construct(private int $id, private string $customer)
    {
    }

    public function addProduct(AbstractProduct $product): void
    {
        $this->products[] = $product;
    }

    public function getTotal(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function printOrder(): void
    {
        echo "Order ID: {$this->id}\n";
        echo "Customer: {$this->customer}\n";
        echo "Products:\n";
        foreach ($this->products as $product) {
            echo $product->printProduct();
        }
        echo "Total: {$this->getTotal()}$\n";
    }
}