<?php

declare(strict_types=1);

namespace RPSTest;

use RPS\Game;
use PHPUnit\Framework\TestCase;
use RPS\Moves\Collections\Moves;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class GameTest extends TestCase
{
    private array $allowedAnswers = [
        Game::WINNER_DRAW,
        Game::WINNER_PLAYER,
        Game::WINNER_COMPUTER,
    ];

    private array $moveNames = [];

    private Game $game;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $moves = new Moves(
            new Rock(),
            new Paper(),
            new Scissors(),
        );

        foreach ($moves as $move) {
            $this->moveNames[] = $move->getName();
        }

        $this->game = new Game($moves);
    }

    public function possibleMoves(): array
    {
        $movesList = [];

        foreach ($this->moveNames as $name) {
            $movesList[] = [$name];
        }

        return $movesList;
    }

    /**
     * @dataProvider possibleMoves
     * @param string $userMove
     */
    public function testGame(string $userMove): void
    {
        self::assertContains($this->game->play($userMove), $this->allowedAnswers);
    }

    /**
     * @dataProvider possibleMoves
     * @param string $userMove
     */
    public function testGamePlay(string $userMove): void
    {
        $this->game->play($userMove);
        $play = $this->game->getPlays()->getMove(1);

        self::assertEquals($userMove, $play->getName());
    }

    public function testPossibleMoves(): void
    {
        $gameMoves = $this->game->getPossibleMoves();

        foreach ($gameMoves as $gameMove) {
            self::assertContains($gameMove->getName(), $this->moveNames);
        }
    }
}
