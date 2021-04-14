<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisGameTest extends TestCase
{
    /**
     * @test
     */
    public function devuelve_0_0(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        self::assertEquals("Love all", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_15_0(): void
    {
        $tennis = new TennisGame("Alvaro", "Pedro");
        $tennis->wonPoint("Alvaro");
        self::assertEquals("Fifteen - Love", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_15_15(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        $tennis->wonPoint("Alvaro");
        $tennis->wonPoint("Pedro");
        self::assertEquals("Fifteen all", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_30_40(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        for ($i = 1; $i <= 2; $i++) {
            $tennis->wonPoint("Alvaro");
            $tennis->wonPoint("Pedro");
        }
        $tennis->wonPoint("Pedro");
        self::assertEquals("Thirty - Forty", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_40_40(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        for ($i = 1; $i <= 3; $i++) {
            $tennis->wonPoint("Alvaro");
            $tennis->wonPoint("Pedro");
        }
        self::assertEquals("Deuce", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_Advantage_40(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        for ($i = 1; $i <= 3; $i++) {
            $tennis->wonPoint("Alvaro");
            $tennis->wonPoint("Pedro");
        }
        $tennis->wonPoint("Alvaro");
        self::assertEquals("Advantage Alvaro", $tennis->getScore());
    }
    /**
     * @test
     */
    public function devuelve_win_player1(): void
    {
        $tennis = new TennisGame("Alvaro","Pedro");
        for ($i = 1; $i <= 5; $i++) {
            $tennis->wonPoint("Alvaro");
        }
        for ($i = 1; $i <= 4; $i++) {
            $tennis->wonPoint("Pedro");
        }
        self::assertEquals("Win Alvaro", $tennis->getScore());
    }
}
