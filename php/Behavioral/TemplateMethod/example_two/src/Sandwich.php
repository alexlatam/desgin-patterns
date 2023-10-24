<?php

namespace TemplateMethodTwo;

/**
 * Esta es la clase abstracta que define el metodo plantilla [Template Method].
 */
abstract class Sandwich
{
    /**
     * Este es el metodo plantilla [Template Method].
     * ESte metodo define el esqueleto de un algoritmo. El orden en que los metodos deben ejecutarse.
     * Este metodo NO contiene logica en si. Sino que llama a los metodos que la tienen.
     * Este metodo NO puede ser modificado por las subclases.
     */
    public function make(): static
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    // Metodo que cuenta con logica de negocio por default.
    protected function layBread(): static
    {
        var_dump('Laying down the bread...');
        return $this;
    }

    // Metodo que cuenta con logica de negocio por default.
    protected function addLettuce(): static
    {
        var_dump('Adding the lettuce...');
        return $this;
    }

    // Metodo que cuenta con logica de negocio por default.
    protected function addSauces(): static
    {
        var_dump('Adding the sauces...');
        return $this;
    }

    // Este metodo debe ser implementado por las subclases. Define el tipo de sandwich.
    protected abstract function addPrimaryToppings(): static;
}