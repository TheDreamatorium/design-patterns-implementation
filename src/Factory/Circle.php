<?php 
include('Shapeable.php');
class Circle implements Shapeable 
{
    private int $radius;

    public function calculateArea() : int
    {
        return (22/7) * $this->radius * $this->radius;
    }

    public function setRadius(int $radius) 
    {
        $this->radius = $radius;
    }

    public function getRadius() : int
    {
        return $this->radius;
    }    
} 
