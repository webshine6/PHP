<?php

require_once 'IBoarderControl.php';

class Citizen implements IBoarderControl
{
    private $name;
    private $age;
    private $id;

    public function __construct(string $name,
                                int $age,
                                string $id)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
    }

    public function enter($input)
    {
        $tokens = explode(' ', $input);
        $name = $tokens[0];
        $age = $tokens[1];
        $id = $tokens[2];

        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }


    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

}

