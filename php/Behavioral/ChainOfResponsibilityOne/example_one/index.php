<?php

use ChainOfResponsibilityOne\DTO\HomeStatus;

require_once __DIR__ . '/vendor/autoload.php';

$locks = new ChainOfResponsibilityOne\Locks();
$lights = new ChainOfResponsibilityOne\Lights();
$alarm = new ChainOfResponsibilityOne\Alarm();

// Pass the next element of the chain
$locks->setSuccessor($lights); // locks -> lights
$lights->setSuccessor($alarm); // lights -> alarm

try {
    $locks->check(new HomeStatus());
} catch (Exception $e) {
}



