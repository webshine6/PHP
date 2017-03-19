<?php

namespace Cat;

class Siamse extends Cat
{
    private $earSize;

    public function __construct($name,$earSize)
    {
        parent::Cat($name);
        $this->setEarSize($earSize);
    }


    protected function setEarSize(float $earSize)
    {
        $this->earSize = $earSize;
    }

    protected function getEarSize()
    {
        return $this->earSize;
    }

    public function __toString()
    {
        return basename(str_replace('\\', '/', get_class($this))).' '. $this->getName().' '. $this->getEarSize();
    }
}