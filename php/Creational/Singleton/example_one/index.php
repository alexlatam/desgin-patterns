<?php

use src\Singleton;

require __DIR__ . '/vendor/autoload.php';

$singleton_one = Singleton::getInstance();
$singleton_two = Singleton::getInstance();

if ($singleton_one === $singleton_two) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}


