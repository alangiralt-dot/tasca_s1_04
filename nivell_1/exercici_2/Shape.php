<?php
declare(strict_types=1);
abstract class Shape {
    // Constructor
    function __construct(
        protected float $width,
        protected float $height) {
    }
    //Methods
    abstract function calculateArea(): float;
}