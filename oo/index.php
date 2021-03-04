<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari","RED");

$mustang = new Car;
$mustang->brand = "Mustang";
$mustang->color = "YEllow";
$mustang->engine = "300";
$mustang->doors = 4;

$m = new Motorcycle;
$m->brand = "Honda";
$m->color = "Blue";
$m->engine = "150";

echo $ferrari->color;