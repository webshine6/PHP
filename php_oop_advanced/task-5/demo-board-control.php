<?php

require_once 'IBoarderControl.php';
require_once 'Robot.php';
require_once 'Citizen.php';

$input = trim(fgets(STDIN));

$invaders = array();

while ($input != 'End'){

    $tokens = explode(' ', $input);
    $countTokens = count($tokens);

    if ($countTokens === 3) {
        $name = $tokens[0];
        $age  = $tokens[1];
        $id   = $tokens[2];

        // new citizen
        $citizen = new Citizen($name, $age, $id);

        $invaders[$id] = $citizen;
    }else {
        $model = $tokens[0];
        $id    = $tokens[1];

        // new robot
        $robot = new Robot($model, $id);
        $invaders[$id] = $robot;
    }

    $input = trim(fgets(STDIN));
}

$fakeId = trim(fgets(STDIN));

foreach ($invaders as $invader) {
    $lastTreeDigits = substr($invader->getId(), -3);

    if (strcmp($lastTreeDigits, $fakeId) === 0) {
        echo $invader->getId().PHP_EOL;
    }

}