<?php

declare(strict_types=1);

namespace RPSTest;

use PHPUnit\Framework\TestCase;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;

class PaperTest extends TestCase
{
    public function testName(): void
    {
        $paper = new Paper();

        self::assertEquals('paper', $paper->getName());
    }

    public function testPlayRock(): void
    {
        $paper = new Paper();
        $rock = new Rock();

        self::assertEquals(1, $paper->play($rock));
    }

    public function testPlayPaper(): void
    {
        $paperOne = new Paper();
        $paperTwo = new Paper();

        self::assertEquals(0, $paperOne->play($paperTwo));
    }

    public function testPlayScissors(): void
    {
        $paper = new Paper();
        $scissors = new Scissors();

        self::assertEquals(-1, $paper->play($scissors));
    }

    public function testSymbol(): void
    {
        $paper = new Paper();

        self::assertEquals((string)$paper, $paper->getSymbol());
    }
}
