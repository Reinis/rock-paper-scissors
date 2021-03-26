<?php

namespace RPS\Moves;

class Rock extends BaseMove
{
    protected string $symbol = '🪨';
    protected string $name = 'rock';
    protected array $wins = [
        'scissors',
    ];
}
