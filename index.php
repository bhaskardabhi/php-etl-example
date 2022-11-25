<?php
require_once __DIR__.'/vendor/autoload.php';

use Input\CSV;
use Transformers\SalaryTransformer;

// Loading the input data
$source = new CSV('employees.csv');

// Save the output
(new SalaryTransformer($source))->saveAsJSON("employees.json");