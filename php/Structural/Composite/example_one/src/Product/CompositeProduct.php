<?php 

namespace Composite\Product;

/**
 * Esta clase contendra los productos simples y los productos compuestos.
 * Puede guardar productos simples y otros productos compuestos dentro de si mismo.
 * Esto es posible porque ambos extienden de la misma clase AbstractProduct.
 * Todo esto formara una estructura de arbol, productos dentro de productos.
 */
class CompositeProduct extends AbstractProduct
{
    private array $products = [];

    public function __construct(private string $name, private int $price)
    {
        parent::__construct($name, $price);
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(AbstractProduct $product): void
    {
        $this->products[] = $product;
    }
    
    public function removeProduct(AbstractProduct $product): void
    {
        $this->products = array_filter($this->products, fn($p) => $p !== $product);
    }

    public function getPrice(): int
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice();
        }
        return $price;
    }
    
    public function printProduct(): void
    {
        echo "=== {$this->name} - {$this->getPrice()}$\n";
        foreach ($this->products as $product) {
            echo "{$product->printProduct()}";
        }
    }
}