<?php

namespace RPSTest;

use PHPUnit\Framework\TestCase;
use RPS\Moves\Collections\Moves;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class MovesTest extends TestCase
{
    private array $moveNames = [
        'rock',
        'paper',
        'scissors',
    ];

    private Moves $moves;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->moves = new Moves(
            new Rock(),
            new Paper(),
            new Scissors()
        );
    }

    public function testGetMoveByName(): void
    {
        foreach ($this->moveNames as $name) {
            self::assertEquals($name, $this->moves->getMoveByName($name)->getName());
        }
    }

    public function testGetMove(): void
    {
        for ($i = 0, $iMax = count($this->moves); $i < $iMax; $i++) {
            self::assertEquals($this->moveNames[$i], $this->moves->getMove($i)->getName());
        }
    }
}
