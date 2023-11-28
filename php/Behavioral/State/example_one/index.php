<?php

use StateOne\Item\Microwave;
use StateOne\States\NotHeatingState;

require_once __DIR__ . '/vendor/autoload.php';

$microwave = new Microwave();
$microwave->start(duration: 120);

$microwave->openDoor();
$microwave->stop();
$microwave->openDoor();
