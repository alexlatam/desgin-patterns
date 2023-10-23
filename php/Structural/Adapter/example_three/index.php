<?php

require __DIR__ . '/../../vendor/autoload.php';

use Adapter\Adapters\eReaderAdapter;
use Adapter\Contracts\TransportInterface;
use Adapter\Services\Transaport;
use Adapter\Services\Kindle;

//ESta es la clase CLIENTE que usara el adapatador
class Taxi
{
    // El cliente recibe una clase que implemente la interfaz BookInterface
    // En caso de recibir una Clase Kindle, es necesario crear un adaptador para que el cliente pueda usarlo
    // Esto porque aunque la Persona puede leerlo, no cuenta con los metodos de la interfaz BookInterface
    public function readBook(TransportInterface $vehicle): void
    {
        $vehicle->start();
        $vehicle->run();
        $vehicle->stop();
    }
}

$taxi = new Taxi(); // Creo una persona, Este sera el cliente que usara el adaptador
$person->readBook(new Transaport()); // Le paso el libro al cliente, pero el cliente no sabe que es un libro, solo sabe que es un BookInterface

// Haciendo que el cliente use el adaptador
$second_person = new Person();
$second_person->readBook(new eReaderAdapter(new Kindle()));


