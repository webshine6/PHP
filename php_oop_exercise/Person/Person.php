<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

 // private $id;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function test()
    {
        var_dump(get_object_vars($this));
    }

    public function __toString()
    {
        return $this->getName().' - '.$this->getAge().PHP_EOL;
    }
}



//$person1 = new Person("Pesho", 20);
//$person2 = new Person("Gosho", 18);
//$person3 = new Person("Stamat", 43);
//
//$persons[] = $person1;
//$persons[] = $person2;
//$persons[] = $person3;
//
//$person1->test();
//echo count(get_object_vars($person1)); // get public fields count
//


