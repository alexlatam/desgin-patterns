<?php

namespace TemplateMethodTwo\Concretes;

use TemplateMethodTwo\Sandwich;

class ChickenSandwich extends Sandwich
{
    protected function addPrimaryToppings(): static
    {
        var_dump('Adding the chicken nuggets...');
        return $this;
    }
}