<?php

require_once 'ICallable.php';
require_once 'IBrowseable.php';

class Smartphone implements ICallable, IBrowseable
{

    public function browsing($sites)
    {
        foreach ($sites as $site) {
            if (preg_match('/[0-9]/', $site)) {
                echo 'Invalid URL!'.PHP_EOL;
                continue;
            }

            echo 'Browsing... '. $site.'!'.PHP_EOL;
        }
    }

    public function calling($numbers)
    {
        foreach ($numbers as $number) {
            if (preg_match('/[a-zA-Z]/', $number)) {
                echo 'Invalid number!'.PHP_EOL;
                continue;
            }

            echo 'Calling... '. $number.PHP_EOL;
        }
    }
}

$line_1 = trim(fgets(STDIN));
$numbers = explode(' ', $line_1);

$line_2 = trim(fgets(STDIN));
$sites = explode(' ', $line_2);

$smartphone = new Smartphone();
$smartphone->calling($numbers);
$smartphone->browsing($sites);