<?php

require_once 'IFerrari.php';

class Ferrari implements IFerrari
{
    private $driverName;

    public function __construct(string $driverName)
    {
        $this->setDriverName($driverName);
    }

    public function setDriverName(string $driverName)
    {
        $this->driverName = $driverName;
    }

    protected function getDriverName()
    {
        return $this->driverName;
    }

    public function useBrakes()
    {
        return "Brakes!";
    }

    public function pushGasPedal()
    {
        return "Zadushavam sA";
    }

    public function __toString()
    {
        return self::MODEL.'/'.$this->useBrakes().'/'.
            $this->pushGasPedal().'/'.$this->getDriverName();
    }
}

$input = trim(fgets(STDIN));
$driverName = $input;


$ferrariGiorgi= new Ferrari($driverName);
//$ferrariDinko = new Ferrari('Dinko');
echo $ferrariGiorgi;