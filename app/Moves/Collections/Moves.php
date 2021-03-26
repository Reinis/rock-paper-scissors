<?php

namespace RPS\Moves\Collections;

use Countable;
use InvalidArgumentException;
use RPS\Moves\Move;

class Moves implements Countable
{
    /**
     * @var Move[]
     */
    private array $moves;

    public function __construct(Move ...$moves)
    {
        $this->moves = $moves;
    }

    public function count(): int
    {
        return count($this->moves);
    }

    public function getMove(int $index): Move
    {
        return $this->moves[$index];
    }

    public function getMoveByName(string $name): Move
    {
        foreach ($this->moves as $move) {
            if ($move->getName() === $name) {
                return $move;
            }
        }

        throw new InvalidArgumentException("Unknown move: {$name}");
    }

    public function getRandomMove(): Move
    {
        /** @var string|int $key */
        $key = array_rand($this->moves);

        return $this->moves[$key];
    }
}
