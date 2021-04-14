<?php

namespace Deg540\PHPTestingBoilerplate;

class TennisGame
{
    private $j1,$j2;
    /**
     * TennisGame constructor.
     * @param $playerName1
     * @param $playerName2
     */
    public function __construct($player1Name, $player2Name)
    {
        $this->j1 = new Player();
        $this->j2 = new Player();
        $this->j1->setName($player1Name);
        $this->j2->setName($player2Name);
        $this->j1->setPunctuation(1);
        $this->j2->setPunctuation(1);
    }

    public function getScore(): string
    {
        $score = array(1 => 'Love',2 => 'Fifteen',3 => 'Thirty',4 => 'Forty',5=>'Advantage',6=>'Win');
        $punctuationPlayer1 = $this->j1->getPunctuation();
        $punctuationPlayer2 = $this->j2->getPunctuation();
        $wordPlayer1 ="";
        $wordPlayer2 ="";
        foreach ($score as $number => $word) {
            if ($punctuationPlayer1 === $number){
                $wordPlayer1 = $word;
            }
            if ($punctuationPlayer2 === $number){
                $wordPlayer2 = $word;
            }
        }
        if ($punctuationPlayer1 === 5){
            return "Advantage ".$this->j1->getName();
        }
        if ($punctuationPlayer2 === 5){
            return "Advantage ".$this->j2->getName();
        }
        if ($wordPlayer1 === $wordPlayer2){
            if ($wordPlayer1 === "Forty"){
                return "Deuce";
            }
            return($wordPlayer1." all");
        }

        return($wordPlayer1." - ".$wordPlayer2);
    }
    public function wonPoint(string $playerName): void {
        $punctuationPlayer1 = $this->j1->getPunctuation();
        $punctuationPlayer2 = $this->j2->getPunctuation();
        if ($this->j1->getName() === $playerName) {
            if ($punctuationPlayer2 === 5){
                $this->j2->setPunctuation($punctuationPlayer2-1);
            }
            $this->j1->setPunctuation($punctuationPlayer1+1);
        } else {
            if ($punctuationPlayer1 === 5){
                $this->j1->setPunctuation($punctuationPlayer2-1);
            }
            $this->j2->setPunctuation($punctuationPlayer2+1);
        }

    }
}