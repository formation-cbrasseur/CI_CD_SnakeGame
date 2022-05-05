<?php

use PHPUnit\Framework\TestCase;

final class PlayerTests extends TestCase
{
    public function testAddScoreUpdatePlayerScoreCorrectly()
    {
        $player = new Player("TestPlayer");
        $player->addScore(5);
        $this->assertEquals(
            $player->getScore(),
            5
        );

        $player->addScore(2);
        $this->assertEquals(
            $player->getScore(),
            7
        );

        $player->addScore(6);
        $this->assertEquals(
            $player->getScore(),
            13
        );
    }

    public function testIfScoreIsMoreThan50ShouldGoBackTo25()
    {
        $player = new Player("TestPlayer");
        $player->addScore(51);
        $this->assertEquals(
            $player->getScore(),
            25
        );
    }

    public function testPlayerPositionnedAt50IsConsideredAsAWinner()
    {
        $player = new Player("TestPlayer");
        $player->addScore(50);
        $this->assertTrue(
            $player->isWinner()
        );
    }
}
