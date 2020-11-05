<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Speedometer.php';

$car = new Car('blue', 4, 'fuel');

$bike = new Bicycle('green', 1);


/*var_dump($car->switchOn());
var_dump($car->switchOff());
var_dump($bike->switchOn());
$bike->setCurrentSpeed(15);
var_dump($bike->switchOn());
var_dump($bike->switchOff());*/

echo Speedometer::kmMiles(10);
echo PHP_EOL;
echo Speedometer::milesKm(10);