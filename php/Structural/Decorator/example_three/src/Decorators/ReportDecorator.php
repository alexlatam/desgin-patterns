<?php

namespace DecoratorThree\Decorators;

use DecoratorThree\Contracts\SalesReportGeneratorInterface;

abstract class ReportDecorator
{
    public function __construct(private SalesReportGeneratorInterface $report)
    {
    }

    public function getReport(): SalesReportGeneratorInterface
    {
        return $this->report;
    }
}