<?php

namespace Cat;

abstract class Cat
{
    private $name;

    public function Cat($name)
    {
        $this->setName($name);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public  function __toString();
}