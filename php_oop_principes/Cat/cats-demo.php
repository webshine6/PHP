<?php

use Cat\Cat;

require_once 'Cat.php';
require_once 'Cymric.php';
require_once 'Siamese.php';
require_once 'StreetExtraordinaire.php';

$cats = array();
$line = trim(fgets(STDIN));

while ($line != 'End') {

    $tokens = explode(' ', $line);
    $catBreed = $tokens[0];
    $catName = $tokens[1];
    $furOrEarMeows = $tokens[2];

    switch ($catBreed) {
        case 'Cymric':
            $cat = new \Cat\Cymric($catName, $furOrEarMeows);
            break;

        case 'Siamese':
            $cat = new \Cat\Siamse($catName, $furOrEarMeows);
            break;

        case 'StreetExtraordinaire':
            $cat = new \Cat\StreetExtraordinaire($catName, $furOrEarMeows);
            break;

        default:
            throw new Exception('Invalid cat breed');

    }

    $cats[$cat->getName()] = $cat;

    $line = trim(fgets(STDIN));
}

$catNameShow = trim(fgets(STDIN));
print $cats[$catNameShow];