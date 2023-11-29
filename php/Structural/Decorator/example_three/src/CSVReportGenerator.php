<?php

namespace DecoratorThree;

use DecoratorThree\Contracts\SalesReportGeneratorInterface;

/**
 * Concrete component
 */
class CSVReportGenerator implements SalesReportGeneratorInterface
{
    public function generate(array $items): string
    {
        // data to save in csv file
        $data = array(
            array('Nombre', 'Apellido', 'Edad'),
            array('Juan', 'Pérez', 25),
            array('María', 'Gómez', 30),
            array('Carlos', 'López', 22)
        );

        try {
            // file name
            $filename = 'sales_report.csv';
            // open[create] file in write mode
            $file = fopen($filename, 'w');

            // Save the column headers
            foreach ($data as $row) {
                fputcsv($file, $row);
            }

            // Close the file
            fclose($file);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return __DIR__ . '/' . $filename;
    }
}