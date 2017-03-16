<?php

class Battle
{
    const ROUNDS = 10;

    private $playerOne;
    private $playerTwo;

    private $winner;
    private $rounds;

    public function __construct(Player $playerOne,
                                Player $playerTwo,
                                $rounds = self::ROUNDS)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->rounds = $rounds;
    }

    public function start()
    {
        $player1 = $this->playerOne;
        $player2 = $this->playerTwo;
        $rounds  = $this->rounds;

        while ($rounds > 0 && $player1->isAlive() && $player2->isAlive()) {
            $player1->attackPlayer($player2);
            $player2->attackPlayer($player1);
            $rounds--;

        }
    }

    public function getResult()
    {
        $player1 = $this->playerOne;
        $player2 = $this->playerTwo;

        if ($player1->isAlive() == $player2->isAlive()) {
            return null;
        }
        $winner  = $player1->isAlive()
            ? $player1
            : $player2;

        return $winner;

    }
}