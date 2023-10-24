<?php

namespace TemplateMethodOne;

/**
 * The Abstract Class defines a template method that contains a skeleton of some
 * algorithm, composed of calls to (usually) abstract primitive operations.
 *
 * Concrete subclasses should implement these operations, but leave the template
 * method itself intact.
 */
abstract class GeneralClass
{
    /**
     * El metodo plantila [Template Method] que define el esqueleto de un algoritmo.
     * El metodo plantilla [Template Method] define el orden de ejecucion de los metodos.
     * No cuenta con logica de negocio. Sino mas bien llama a los metodos que la tienen.
     * Establece el orden en que deben ejecutarse los metodos.
     */
    final public function templateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperations1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    /**
     * Metodo que cuenta con logica de negocio por default.
     */
    protected function baseOperation1(): void
    {
        echo "AbstractClass says: I am doing the bulk of the work\n";
    }

    /**
     * Metodo que cuenta con logica de negocio por default.
     */
    protected function baseOperation2(): void
    {
        echo "AbstractClass says: But I let subclasses override some operations\n";
    }

    /**
     * Metodo que cuenta con logica de negocio por default.
     */
    protected function baseOperation3(): void
    {
        echo "AbstractClass says: But I am doing the bulk of the work anyway\n";
    }

    /**
     * Estos metodos seran implementados por las subclases.
     * Estos metodos son obligatorios.
     */
    abstract protected function requiredOperations1(): void;

    abstract protected function requiredOperation2(): void;

    /**
     * Estos metodos son opcionales, por defecto el codigo correra sin ellos.
     */
    protected function hook1(): void { }

    protected function hook2(): void { }
}