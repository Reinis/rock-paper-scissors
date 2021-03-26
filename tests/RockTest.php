<?php

declare(strict_types=1);

namespace RPSTest;

use PHPUnit\Framework\TestCase;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class RockTest extends TestCase
{
    public function testName(): void
    {
        $rock = new Rock();

        self::assertEquals('rock', $rock->getName());
    }

    public function testPlayRock(): void
    {
        $rockOne = new Rock();
        $rockTwo = new Rock();

        self::assertEquals(0, $rockOne->play($rockTwo));
    }

    public function testPlayPaper(): void
    {
        $rock = new Rock();
        $paper = new Paper();

        self::assertEquals(-1, $rock->play($paper));
    }

    public function testPlayScissors(): void
    {
        $rock = new Rock();
        $scissors = new Scissors();

        self::assertEquals(1, $rock->play($scissors));
    }

    public function testSymbol(): void
    {
        $rock = new Rock();

        self::assertEquals((string)$rock, $rock->getSymbol());
    }
}
