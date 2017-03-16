<?php

class Player
{
    private static $playerId;

    private $id;
    private $name;
    private $health;
    private $attack;

    public function __construct(string $name)
    {
        $this->id     = ++self::$playerId;
        $this->name   = $name;
        $this->health = rand(20, 60);
        $this->attack = rand(1, 8);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }


    public function getAttack() : int
    {
        return $this->attack;
    }

    public function getHealth() : int
    {
        return $this->health;
    }

    /**
     * @param int $health
     * @return void
     */
    public function reduceHealth(int $health)
    {
        $this->health -= $health;
    }

    public function isAlive() : bool
    {
        return $this->health > 0;
    }

    // attack player
    public function attackPlayer(Player $player)
    {
        if ($player->getId() == $this->getId()) {
            throw new Exception("Cannot attack yourself!");
        }

        $player->reduceHealth($this->getAttack());
        //var_dump($player);
    }


}