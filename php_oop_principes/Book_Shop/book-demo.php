<?php

require_once 'Book.php';
require_once 'GoldenEditionBook.php';

$author = trim(fgets(STDIN));
$title = trim(fgets(STDIN));
$price = trim(fgets(STDIN));
$type = trim(fgets(STDIN));

switch ($type) {
    case 'STANDARD':
        $standardBook = new Book($author, $title, $price);
        echo $standardBook;
        break;

    case 'GOLD':
        $goldBook = new GoldenEditionBook($author, $title, $price);
        echo $goldBook;
        break;

    default:
        throw new Exception("Type is not valid!");
        break;
}

