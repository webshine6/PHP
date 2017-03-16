<?php

require_once "Car\Car.php";

use Car\Car;

$n = intval(fgets(STDIN)); // N - брой автомобили

$cars = array();

while($n--) {
    $line = trim(fgets(STDIN));
    $tokens = explode(' ', $line);

    $model = $tokens[0];
    $fuelAmount = floatval($tokens[1]);
    $fuelCost = floatval($tokens[2]);

    $car = new Car($model, $fuelAmount, $fuelCost);
    $cars[$model] = $car;

}

$driveCars = array();

$command = trim(fgets(STDIN));

while($command != 'End'){
    $tokens = explode(' ', $command);

    $model = $tokens[1];
    $amountKm = floatval($tokens[2]);

   $car = $cars[$model];

    try {
       $car->drive($amountKm);
    }catch (Exception $e) {
       echo $e->getMessage() . PHP_EOL;
    }

    $line = trim(fgets(STDIN));
}

// Print all cars
foreach ($cars as $car) {
    echo $car.PHP_EOL;
}



