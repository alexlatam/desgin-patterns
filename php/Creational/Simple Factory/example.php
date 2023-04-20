<?php
/**
 * Paso 1
 * Crear una interfacz o clase abstracta que definira los metodos que tendran todos los productos creados por la fabrica
 * 
 * Paso 2
 * Crear las clases concretas que implementaran la interfaz o clase abstracta creada en el paso 1
 * Estas calses concretas seran los productos concretos en si
 *
 * Paso 3
 * Crear la clase fabrica que sera la encargada de crear los productos concretos
 * Esta fabrica solo tendra un metodo que sera el encargado de crear los productos concretos
 * 
 * Paso 4 (Opcional)
 * Crear una clase cliente o codigo que use la fabrica para crear los productos concretos
 */

// Paso 1
// Interfaz del producto
interface Pizza {
    public function preparar(): string;
}

// Paso 2
// Productos concretos
class PizzaMargarita implements Pizza {
    public function preparar(): string {
        return "Preparando pizza Margarita...";
    }
}
class PizzaPepperoni implements Pizza {
    public function preparar(): string {
        return "Preparando pizza Pepperoni...";
    }
}
class PizzaHawaiana implements Pizza {
    public function preparar(): string {
        return "Preparando pizza Hawaiana...";
    }
}

// Paso 3
// Fábrica de pizzas
class Pizzeria {
    public function crearPizza(string $tipo): Pizza {
        switch ($tipo) {
            case 'margarita':
                return new PizzaMargarita();
            case 'pepperoni':
                return new PizzaPepperoni();
            case 'hawaiana':
                return new PizzaHawaiana();
            default:
                throw new Exception("Tipo de pizza desconocido");
        }
    }
}

// Paso 4 - uso de la fábrica
// Cliente
$pizzeria = new Pizzeria();
$pizzaMargarita = $pizzeria->crearPizza('margarita');
$pizzaPepperoni = $pizzeria->crearPizza('pepperoni');
echo $pizzaMargarita->preparar(); // Preparando pizza Margarita...
echo $pizzaPepperoni->preparar(); // Preparando pizza Pepperoni...