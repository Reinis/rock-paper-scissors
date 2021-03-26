<?php

namespace RPSTest;

use RPS\Game;
use PHPUnit\Framework\TestCase;
use RPS\Moves\Collections\Moves;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class GameTest extends TestCase
{
    public function testGame(): void
    {
        $moves = new Moves(
            new Rock(),
            new Paper(),
            new Scissors(),
        );
        $game = new Game($moves);

        $allowedAnswers = [
            Game::WINNER_DRAW,
            Game::WINNER_PLAYER,
            Game::WINNER_COMPUTER,
        ];

        self::assertContains($game->play('rock'), $allowedAnswers);
        self::assertContains($game->play('paper'), $allowedAnswers);
        self::assertContains($game->play('scissors'), $allowedAnswers);
    }
}
