<?php

use Prototype\Books\HistoryBook;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Creamos un nuevo libro de historia
$historyBook = new HistoryBook();

// Vamos a clonar 10 veces el objeto $historyBook
for ($i=0; $i < 10; $i++) { 
    $cloneHistoryBook = clone $historyBook;
    $cloneHistoryBook->setTitle('The History of the World' . $i);
    echo "Este libro se titula: " . $cloneHistoryBook->getTitle() . "\n";
}

