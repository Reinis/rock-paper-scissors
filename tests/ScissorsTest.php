<?php

declare(strict_types=1);

namespace RPSTest;

use PHPUnit\Framework\TestCase;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class ScissorsTest extends TestCase
{
    public function testName(): void
    {
        $scissors = new Scissors();

        self::assertEquals('scissors', $scissors->getName());
    }

    public function testPlayRock(): void
    {
        $scissors = new Scissors();
        $rock = new Rock();

        self::assertEquals(-1, $scissors->play($rock));
    }

    public function testPlayPaper(): void
    {
        $scissors = new Scissors();
        $paper = new Paper();

        self::assertEquals(1, $scissors->play($paper));
    }

    public function testPlayScissors(): void
    {
        $scissorsOne = new Scissors();
        $scissorsTwo = new Scissors();

        self::assertEquals(0, $scissorsOne->play($scissorsTwo));
    }

    public function testSymbol(): void
    {
        $scissors = new Scissors();

        self::assertEquals((string)$scissors, $scissors->getSymbol());
    }
}
