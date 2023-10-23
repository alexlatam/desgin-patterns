<?php
require './vendor/autoload.php';

use AdapterTwo\Adapters\eReaderAdapter;
use AdapterTwo\Contracts\BookInterface;
use AdapterTwo\Readers\Kindle;
use AdapterTwo\Readers\Book;

//Esta es la clase CLIENTE que usara el adapatador
final class Person
{
    // El cliente recibe una clase que implemente la interfaz BookInterface
    // En caso de recibir una Clase Kindle, es necesario crear un adaptador para que el cliente pueda usarlo
    // Esto porque aunque la Persona puede leerlo, no cuenta con los metodos de la interfaz BookInterface
    public function readBook(BookInterface $book): void
    {
        $book->open();
        $book->nextPage();
    }
}

$person = new Person();
// Le paso el libro al cliente, pero el cliente no sabe que es un libro, solo sabe que es un BookInterface
$person->readBook(new Book());

// Haciendo que el cliente use el adaptador. Para adaptar la clase Kindle a la interfaz BookInterface
$second_person = new Person();
// Adaptamos la clase Kindle[eReaderInterface] a la interfaz BookInterface
$adapter = new eReaderAdapter(reader: new Kindle());
$second_person->readBook($adapter);

/**
 * Como se puede ver, el patron Adapter nos permite adaptar una interfaz a otra interfaz
 * En este caso: eReaderInterface[Kindle, PDFReader] a BookInterface[Book]
 */
