<?php

require_once 'IPerson.php';
require_once '../task-2/Identifiable.php';
require_once '../task-2/Birthable.php';

class Citizen implements IPerson, Identifiable, Birthable
{
    private $id;
    private $name;
    private $age;
    private $birthDate;



    public function __construct(string $id,
                                string $name,
                                int $age,
                                string $birthDate)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAge($age);
        $this->setBirthDate($birthDate);
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }


    public function setBirthDate(string $birthDate)
    {
        $this->birthDate = $birthDate;
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getBirthdate(): string
    {
        return $this->birthDate;
    }

}

$citizen = new Citizen('9105156312','Pesho', 25,'15/05/1991');
