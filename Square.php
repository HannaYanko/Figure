<?php

class Square extends Shape {
    private $side;

    public function __construct($color, $side) {
        parent::__construct($color);
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }

    public function getPerimeter() {
        return 4 * $this->side;
    }
}