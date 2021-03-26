<?php

namespace RPS\Moves;

class Scissors extends BaseMove
{
    protected string $symbol = '✌';
    protected string $name = 'scissors';
    protected array $wins = [
        'paper',
    ];
}
