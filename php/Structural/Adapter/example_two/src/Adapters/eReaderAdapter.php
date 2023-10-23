<?php

namespace AdapterTwo\Adapters;

use AdapterTwo\Contracts\BookInterface;
use AdapterTwo\Contracts\eReaderInterface;

/**
 * Este es el Adapatador.
 * Implementa la interfaz del tipo que se espera en el cliente (BookInterface)
 * Sirve adpatar las clases de la interfaz eReaderInterface a la interfaz BookInterface.
 * Por lo tanto los metodos se adaptan a la interfaz BookInterface.
 *
 * Esta clase transforma/adapta la interfaz eReaderInterface a la interfaz BookInterface
 */
final readonly class eReaderAdapter implements BookInterface
{
    // El constructor espera una intergaz que sera adaptada a la interfaz BookInterface
    public function __construct(private eReaderInterface $reader)
    {
    }

    // El metodo open no se encuentra en la interfaz eReaderInterface
    // Por lo tanto se debe adaptar a la interfaz BookInterface, pues esta interfaz espera el cliente
    public function open(): void
    {
        // En el metodo open, usamos el metodo turnOn de la interfaz eReaderInterface [kindle, pdfReader]
        $this->reader->turnOn();
    }

    public function nextPage(): void
    {
        $this->reader->pressNextButton();
    }
}