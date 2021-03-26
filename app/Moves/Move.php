<?php

namespace RPS\Moves;

interface Move
{
    public function getName(): string;

    public function getSymbol(): string;

    public function play(Move $move): int;
}
