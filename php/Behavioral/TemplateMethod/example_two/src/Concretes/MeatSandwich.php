<?php

namespace TemplateMethodTwo\Concretes;

use TemplateMethodTwo\Sandwich;

class MeatSandwich extends Sandwich
{
    protected function addPrimaryToppings(): static
    {
        var_dump('Adding the cow meat...');
        return $this;
    }
}