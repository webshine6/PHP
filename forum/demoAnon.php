<?php

// anonymous object
// stdClass - empty generic class for initializing object of anonymous type
$anonCat = new stdClass();
$anonCat->name = 'Tom';
$anonCat->age = 24;
$anonCat->colors = ['red', 'green', 'blue'];


$obj = (object)['name'=>'Jerry','age'=>5];
//echo json_encode($obj);
