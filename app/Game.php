<?php

namespace RPS;

use LogicException;
use RPS\Moves\Collections\Moves;

class Game
{
    public const WINNER_DRAW = 0;
    public const WINNER_PLAYER = 1;
    public const WINNER_COMPUTER = 2;

    private Moves $moves;
    private Moves $plays;

    public function __construct(Moves $moves)
    {
        $this->moves = $moves;
    }

    public function play(string $moveUser): int
    {
        $moveComputer = $this->moves->getRandomMove();
        $move = $this->moves->getMoveByName($moveUser);

        $this->plays = new Moves($moveComputer, $move);

        $result = $move->play($moveComputer);

        if ($result === 0) {
            $winner = self::WINNER_DRAW;
        } elseif ($result === 1) {
            $winner = self::WINNER_PLAYER;
        } elseif ($result === -1) {
            $winner = self::WINNER_COMPUTER;
        } else {
            throw new LogicException("Unexpected result of the play: {$result}");
        }

        return $winner;
    }

    public function getPossibleMoves(): Moves
    {
        return $this->moves;
    }

    public function getPlays(): Moves
    {
        return $this->plays;
    }
}
