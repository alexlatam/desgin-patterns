<?php

namespace TemplateMethodTwo\Concretes;

use TemplateMethodTwo\Sandwich;

class VegetarianSandwich extends Sandwich
{
    protected function addPrimaryToppings(): static
    {
        var_dump('Adding the advocate...');
        return $this;
    }
}