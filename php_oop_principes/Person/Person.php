<?php

class Person
{
    protected $age;
    protected $name;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param mixed $name
     */
    protected function setName(string $name)
    {
        if (strlen($name) < 3) {
            throw new Exception("Name's length should not be less than 3 symbols!");
        }

        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     * @throws Exception
     */
    protected function setAge(int $age)
    {
        if ($age < 1) {
            throw new Exception("Age must be positive!");
        }

        $this->age = $age;
    }


    public function getAge()
    {
        return $this->age;
    }
}