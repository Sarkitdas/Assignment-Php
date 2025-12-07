<?php
session_start();

class shape
{
    public function area()
    {
        return 0;
    }
}

class rectangle extends shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}
class circle extends shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new rectangle(10, 5);
$circle = new circle(7);

echo "Area of Rectangle: " . $rectangle->area() . "\n";
echo "Area of Circle: " . $circle->area() . "\n";
