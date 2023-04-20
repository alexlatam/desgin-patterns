<?php

use Builder\Devices\BudgetPcBuilder;
use Builder\Devices\GamerPcBuilder;
use Builder\ShopDirector;
// Importo el autoload de composer para poder usar las clases de los namespaces.
// Para poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Instanciamos las fabricas concretas
$director = new ShopDirector(); // instancio el director, el cual se encargara de crear mis pc's

/**** Creo mi pc budget(barata) ****/
$director->setBuilder(new BudgetPcBuilder()); // indico cual pc voy a construir
$director->buildPc(); // Construyo mi pc
$myBudgetPc = $director->getPc(); // Obtengo mi pc budget(barata)


/**** Creo mi pc gamer ****/
$director->setBuilder(new GamerPcBuilder()); // indico cual pc voy a construir
$director->buildPc(); // Construyo mi pc
$myPcGamer = $director->getPc(); // Obtengo mi pc gamer

// Ahora llamamos a los metodos de cada empleado
echo $programmer->work() . "\n";
