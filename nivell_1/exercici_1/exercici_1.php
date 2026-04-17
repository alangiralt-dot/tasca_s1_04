<?php
// exercici_1.php
declare(strict_types=1);
require 'Employee.php';
$e1 = new Employee('James', 'Smith', 6500);
echo $e1->getCustomerInfo() . PHP_EOL;
$e2 = new Employee('Robert', 'Miller', 4200);
echo $e2->getCustomerInfo() . PHP_EOL;