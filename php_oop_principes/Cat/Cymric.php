<?php
namespace Cat;


class Cymric extends Cat
{
    private $furLength;

    public function __construct($name, $furLength)
    {
        parent::Cat($name);
        $this->setFurLength($furLength);
    }

    protected function setFurLength(float $furLength)
    {
        $this->furLength = $furLength;
    }

    public function getFurLength()
    {
        return $this->furLength;
    }

    public function __toString()
    {
      return basename(str_replace('\\', '/', get_class($this))).' '. $this->getName(). ' '. $this->getFurLength();
    }
}