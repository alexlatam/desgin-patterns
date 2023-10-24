<?php

require_once __DIR__ . '/vendor/autoload.php';

use TemplateMethodOne\ConcreteClassOne;
use TemplateMethodOne\ConcreteClassTwo;
use TemplateMethodOne\GeneralClass;

/**
 * The client code calls the template method to execute the algorithm. Client
 * code does not have to know the concrete class of an object it works with, as
 * long as it works with objects through the interface of their base class.
 */
function clientCode(GeneralClass $class)
{
    // ...
    $class->templateMethod();
    // ...
}

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClassOne());
echo "\n";

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClassTwo());