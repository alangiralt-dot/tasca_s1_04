<?php
declare(strict_types=1);
require_once('Shape.php');
require_once('Rectangle.php');
require_once('Triangle.php');
$obj1 = new Rectangle(7.1, 3.5);
var_dump($obj1->calculateArea());
$obj2 = new Triangle(7.1, 3.5);
var_dump($obj2->calculateArea());