<?php

namespace DecoratorThree\Contracts;

interface SalesReportGeneratorInterface
{
    public function generate(array $items): string;
}