<?php

namespace DecoratorThree\Decorators;

use DecoratorThree\Contracts\SalesReportGeneratorInterface;

class ObfuscatorReportGenerator extends ReportDecorator implements SalesReportGeneratorInterface
{
    public function generate(array $items): string
    {
        $report = $this->getReport()->generate($items);

        $report = str_replace('a', 'x', $report);
        $report = str_replace('e', 'y', $report);
        $report = str_replace('i', 'z', $report);
        $report = str_replace('o', 'w', $report);
        $report = str_replace('u', 'v', $report);

        return $report;
    }

}