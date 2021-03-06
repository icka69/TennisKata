<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Tennis;
use PHPUnit\Framework\TestCase;

final class TennisTest extends TestCase
{
    /**
     * @test
     */
    public function initial_state()
    {
        $tennis = new Tennis([0, 0, 0, 0]);

        $playResult = $tennis->playEnd();

        $this->assertEquals([0, 0, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_first_play_state()
    {
        $tennis = new Tennis([0, 0, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([1, 0, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_second_play_state()
    {
        $tennis = new Tennis([1, 0, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([2, 0, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_first_game_state()
    {
        $tennis = new Tennis([3, 0, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([0, 0, 1, 0], $playResult);
    }

    /**
     * @test
     */
    public function player2_wins_first_play_state()
    {
        $tennis = new Tennis([0, 0, 0, 0]);

        $playResult = $tennis->playEnd('Player2');

        $this->assertEquals([0, 1, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player2_wins_first_game_state()
    {
        $tennis = new Tennis([0, 3, 0, 0]);

        $playResult = $tennis->playEnd('Player2');

        $this->assertEquals([0, 0, 0, 1], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_and_first_deuce_state()
    {
        $tennis = new Tennis([2, 3, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([3, 3, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_and_advantage_state()
    {
        $tennis = new Tennis([3, 3, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([4, 3, 0, 0], $playResult);
    }

    /**
     * @test
     */
    public function player1_wins_and_initial_state_with_game_addition()
    {
        $tennis = new Tennis([3, 1, 0, 0]);

        $playResult = $tennis->playEnd('Player1');

        $this->assertEquals([0, 0, 1, 0], $playResult);
    }

//    /**
//     * @test
//     */
//    public function initial_state()
//    {
//        $tennis = new Tennis([0,0,0,0]);
//
//        $playResult = $tennis->playEnd();
//
//        $this->assertEquals('Love-Love : 0-0', $playResult);
//    }
//
//    /**
//     * @test
//     */
//    public function player1_wins_first_play()
//    {
//        $tennis = new Tennis([0,0,0,0]);
//
//        $playResult = $tennis->playEnd('Player1');
//
//        $this->assertEquals('Fifteen-Love : 0-0', $playResult);
//    }
//
//    /**
//     * @test
//     */
//    public function player1_wins_second_play()
//    {
//        $tennis = new Tennis([15,0,0,0]);
//
//        $playResult = $tennis->playEnd('Player1');
//
//        $this->assertEquals('Thirty-Love : 0-0', $playResult);
//    }
//
//    /**
//     * @test
//     */
//    public function player1_wins_third_play()
//    {
//        $tennis = new Tennis([30,0,0,0]);
//
//        $playResult = $tennis->playEnd('Player1');
//
//        $this->assertEquals('Forty-Love : 0-0', $playResult);
//    }
//
//    /**
//     * @test
//     */
//    public function player1_wins_the_first_game(){
//        $tennis = new Tennis([40,0,0,0]);
//
//        $playResult = $tennis->playEnd('Player1');
//
//        $this->assertEquals('Love-Love : 1-0', $playResult);
//    }
//    /**
//     * @test
//     */
//    public function player2_wins_the_first_play(){
//        $tennis = new Tennis([0,0,0,0]);
//
//        $playResult = $tennis->playEnd('Player2');
//
//        $this->assertEquals('Love-Fifteen : 0-0', $playResult);
//    }
}
