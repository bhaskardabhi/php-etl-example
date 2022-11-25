<?php
require_once __DIR__.'/vendor/autoload.php';

use Input\CSV;

use Output\JSON as OutputJSON;
use Output\CSV as OutputCSV;

use Transformers\SalaryTransformer;

SalaryTransformer::register('JSON',OutputJSON);
SalaryTransformer::register('CSV',OutputCSV);

// Loading the input data
$source = new CSV('employees.csv');

// Save the output
(new SalaryTransformer($source))->saveAsJSON("employees.json");