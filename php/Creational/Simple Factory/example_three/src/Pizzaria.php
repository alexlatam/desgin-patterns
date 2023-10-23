<?php 

namespace SimpleFactory;

// Esta sera la clase PRINCIAPAL del patron de diseño
// La clase Pepperoni es la que se encaragara de crear cada pizza
// Y como se puede ver, gracias a que se realizo la abstraccion, 
// ahora cada metodo de creacion, debe retornar un objeto que implemente la interfaz 'VehicleInterface'
final class Pizzeria
{
    public function createSmallPizza(): Pizza
    {
        return new Pizza(slices: 6);
    }
    
    public function createMediumPizza(): Pizza
    {
        return new Pizza(slices: 12);
    }
    
    public function createBigPizza(): Pizza
    {
        return new Pizza(slices: 18);
    }
    
    public function createFamiliarPizza(): Pizza
    {
        return new Pizza(slices: 24);
    }
}