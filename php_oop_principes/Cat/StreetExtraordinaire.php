<?php

namespace Cat;

class StreetExtraordinaire extends Cat
{
    private $decibelsOfMeows;

    public function __construct($name, $decibelsOfMeows)
    {
        parent::Cat($name);
        $this->setDecibelsOfMeows($decibelsOfMeows);
    }

    public function setDecibelsOfMeows(int $decibelsOfMeows)
    {
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    public function getDecibelsOfMeows()
    {
        return $this->decibelsOfMeows;
    }

    public function __toString()
    {
        return basename(str_replace('\\', '/', get_class($this))).' '.$this->getName().' '.$this->getDecibelsOfMeows();
    }
}