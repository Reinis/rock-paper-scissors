<?php

namespace RPS\Moves;

class BaseMove implements Move
{
    protected string $symbol = '🚫';
    protected string $name = 'none';
    protected array $wins = [];

    public function __toString(): string
    {
        return $this->getSymbol();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function play(Move $move): int
    {
        if ($move->getName() === $this->getName()) {
            return 0;
        }

        return in_array($move->getName(), $this->wins, true) ? 1 : -1;
    }
}