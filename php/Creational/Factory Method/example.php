<?php

/**
 * Receta
 * 
 * Paso 1 
 * Crear una interfaz o clase abstracta que definira los metodos que tendran todos los productos creados por la fabrica.
 * La interfaze debe tener un método de fábrica que devuelva un objeto de tipo producto.
 * El tipo de retorno del método debe coincidir con la interfaz común del producto.

 * Paso 2  
 * Crear una clase concreta que implemente la interfaz o clase abstracta creada en el paso 1.
 * Esto por cada tipo de producto que se quiera crear.
 * Cada producto tendra su propia fabrica.

 * Paso 3 
 * Crear una interfaz o clase abstracta que definira los metodos que tendran todos los productos creados por la fabrica.

 * Paso 4 
 * Crear una clase concreta que implemente la interfaz o clase abstracta creada en el paso 3.
 * Basicamente crear una clase por cada producto que se quiera crear.

 * Paso 5 - Opcional
 * Crear una clase o funcion que implemente la interfaz o clase abstracta creada en el paso 1.
 * Esta clase o funcion sera la encargada de crear los productos.
 */

/**
 * Paso 1
 * La interface MainFactoryInterface declara el método de fábrica. Este metodo debe devolver un objeto de tipo Product.
 */
interface MainFactoryInterface
{
    /**
     * Note that the Creator may also provide some default implementation of the
     * factory method.
     */
    public function factoryMethod(): Product;

}

/**
 * Paso 2
 * Las clases ConcreteFactoryOne y ConcreteFactoryTwo implementan la interfaz MainFactoryInterface
 * Y por lo tanto deben implmentar el metodo de fabrica.
 */
final class ConcreteFactoryOne implements MainFactoryInterface
{
    public function factoryMethod(): Product
    {
        return new ConcreteProductOne();
    }
}

final class ConcreteFactoryTwo implements MainFactoryInterface
{
    public function factoryMethod(): Product
    {
        return new ConcreteProductTwo();
    }
}

/**
 * Paso 3
 * La interfaz Product declara las operaciones que todos los productos concretos deben implementar.
 */
interface Product
{
    public function isActive(): string;
    public function totalStock(): int;
}

/**
 * Concrete Products provide various implementations of the Product interface.
 */
final class ConcreteProductOne implements Product
{
    public function isActive(): string
    {
        return "This product is active";
    }

    public function totalStock(): int
    {
        return 100;
    }
}

final class ConcreteProductTwo implements Product
{
    public function isActive(): string
    {
        return "This product is not active";
    }
    public function totalStock(): int
    {
        return 0;
    }
}

/**
 * The client code works with an instance of a concrete creator, albeit through
 * its base interface. As long as the client keeps working with the creator via
 * the base interface, you can pass it any creator's subclass.
 */
function clientCode(MainFactoryInterface $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n";
    // ...
}

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo "App: Launched with the ConcreteFactoryOne.\n";
clientCode(new ConcreteFactoryOne());
echo "\n\n";

echo "App: Launched with the ConcreteFactoryTwo.\n";
clientCode(new ConcreteFactoryTwo());
