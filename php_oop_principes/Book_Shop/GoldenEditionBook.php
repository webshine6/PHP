<?php

/**
 * Created by PhpStorm.
 * User: Ramona
 * Date: 16.3.2017 г.
 * Time: 19:00
 */
class GoldenEditionBook extends Book
{
    public function __construct($author, $title, $price)
    {
        parent::__construct($author, $title, $price);
    }

    public function getPrice() : float
    {
        return parent::getPrice() * 1.3;
    }
}