<?php
declare(strict_types=1);
class Triangle extends Shape {
    function __construct(float $width, float $height) {
        parent::__construct($width,$height);
    }
    public function calculateArea(): float {
        return $this->width * $this->height / 2;
    }
}