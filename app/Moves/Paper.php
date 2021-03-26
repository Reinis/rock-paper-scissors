<?php

namespace RPS\Moves;

class Paper extends BaseMove
{
    protected string $symbol = '📃️';
    protected string $name = 'paper';
    protected array $wins = [
        'rock',
    ];
}
