<?php

class Vehicle
{
    public  $brand;
    public  $color;
    public  $engine;

    public function __construct($brand = null,$color = null)
    {
         $this->brand = $brand;
         $this->color = $color;
    }

    public function getEngine($type = "horpsepower")
    {
        return "{$this->engine}  {$type}";
    }
}

