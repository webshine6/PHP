<?php

spl_autoload_register(function ($class){
   $class = $class.'.php';
   require_once $class;
});


$numberOfLines = trim(fgets(STDIN));
$persons = array();

for($i = 0; $i < $numberOfLines; $i++) {
    $input = trim(fgets(STDIN));
    $input = explode(' ', $input);

   // var_dump($inputArr[1]);

    $name = $input[0];
    $age  = intval($input[1]);

    if ($age > 30) {
        $person = new Person($name, $age);
        $persons[] = $person;
    }

}

    usort($persons, function ($p1, $p2){
        return $p1 <=> $p2;
    });


    foreach ($persons as $person) {
        echo $person;
    }

//var_dump($persons);
s