<?php

namespace TemplateMethodOne;

/**
 * Clase concreta que implementa todos los metodos abstractos de la clase abstracta[Clase que contiene el template method].
 * Estos metodos cuentan con logica de negocio propia de esta clase.
 */
class ConcreteClassTwo extends GeneralClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass2 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass2 says: Implemented Operation2\n";
    }

    // Este metodo es opcional. Esta clase necesita implementar este metodo para cumplir con su logica de negocio.
    protected function hook1(): void
    {
        echo "ConcreteClass2 says: Overridden Hook1\n";
    }
}