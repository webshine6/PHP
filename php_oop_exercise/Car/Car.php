<?php

namespace Car;

class Car
{
    /**
     * @var string
     */
    private $model;// ! модил unique

    /**
     * @var float
     */
    private $fuelAmount; // заредено гориво

    /**
     * @var string
     */
    private $fuelCost; // разход за 1км

    /**
     * @var string
     */
    private $distanceTravelled; // default 0

    public function __construct(string $model,
                                float $fuelAmount,
                                float $fuelCost)
    {
        $this->setModel($model);
        $this->setFuelAmount($fuelAmount);
        $this->setFuelCost($fuelCost);
        $this->setDistanceTravelled(0);
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getFuelAmount() : float
    {
        return $this->fuelAmount;
    }

    public function setFuelAmount($fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
    }


    public function getFuelCost() : float
    {
        return $this->fuelCost;
    }


    public function setFuelCost($fuelCostFor1Km)
    {
        $this->fuelCost = $fuelCostFor1Km;
    }


    public function getDistanceTravelled() : float
    {
        return $this->distanceTravelled;
    }

    // придвижи
    public function setDistanceTravelled($distance)
    {
        $this->distanceTravelled = $distance;
    }



    public function drive(float $km) {
        $cost = round($km * $this->getFuelCost());

        if ($cost > $this->fuelAmount) {
            throw new \Exception("Insufficient fuel for the drive.");
        }

        $this->fuelAmount -= $cost;
        $this->distanceTravelled += $km;

    }

    public function __toString()
    {
        return $this->getModel(). ' '
            .number_format(abs($this->getFuelAmount()), 2).' '
            .ceil($this->getDistanceTravelled());
    }
}