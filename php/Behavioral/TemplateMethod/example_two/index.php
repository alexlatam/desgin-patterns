<?php

require_once __DIR__ . '/vendor/autoload.php';

use TemplateMethodTwo\Concretes\ChickenSandwich;
use TemplateMethodTwo\Concretes\MeatSandwich;
use TemplateMethodTwo\Concretes\VegetarianSandwich;

/**
 * Creamos los sandwiches.
 * Cada uno de ellos se crearan en el mismo orden, definido por el Template Method.
 * Pero cada uno de ellos, tendra su propia implementacion de los metodos abstractos.
 * Osea el ingrediente principal es distinto para cada uno de ellos.
 */
(new ChickenSandwich())->make();
(new MeatSandwich())->make();
(new VegetarianSandwich())->make();