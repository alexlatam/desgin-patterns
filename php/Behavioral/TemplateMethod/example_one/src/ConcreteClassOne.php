<?php

namespace TemplateMethodOne;

/**
 * Clase concreta que implementa todos los metodos abstractos de la clase abstracta[Clase que contiene el template method].
 * Estos metodos cuentan con logica de negocio propia de esta clase.
 */
class ConcreteClassOne extends GeneralClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass1 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass1 says: Implemented Operation2\n";
    }

}