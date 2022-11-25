<?php
require_once __DIR__.'/vendor/autoload.php';

use Input\CSV;
use Input\JSON;

use Output\JSON as OutputJSON;
use Output\CSV as OutputCSV;

use Transformers\SalaryTransformer;

SalaryTransformer::register('JSON',OutputJSON::class);
SalaryTransformer::register('CSV',OutputCSV::class);

/**
 * Convert from CSV to JSON
 */
// Loading the input data
(new SalaryTransformer(
    new CSV('employees.csv')
))->saveAsJSON("employees.json");

// /**
//  * Convert from JSON to CSV
//  */
(new SalaryTransformer(
    new JSON('employees.json')
))->saveAsCSV("employees_2.csv");
