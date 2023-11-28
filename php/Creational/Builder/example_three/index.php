<?php

use BuilderThree\Builders\InternationalPlanBuilder;
use BuilderThree\Builders\LocalPlanBuilder;
use BuilderThree\Director;

require __DIR__ . '/vendor/autoload.php';

$plan_builder = new LocalPlanBuilder();
$director = new Director($plan_builder);

// Build a plan
$director->MBAPlan();

// Get the plan
$plan = $plan_builder->getPlan();

$international_builder = new InternationalPlanBuilder();
// Set the new builder
$director->setBuilder($international_builder);

// Build a plan
$director->MBAPlan();

// Get the plan
$new_plan = $international_builder->getPlan();

// print the plans
echo $plan . PHP_EOL;
echo $new_plan . PHP_EOL;
