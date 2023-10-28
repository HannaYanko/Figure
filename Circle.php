<?php



class Circle extends Shape {
    private $radius;
    const PI = 3.14;

    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea() {
        return self::PI * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * self::PI * $this->radius;
    }
}

