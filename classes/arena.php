<?php
include_once 'arena.php';

class arena{
    
    public $player1;
    public $player2;
    public $team1; // list of bromonIDs
    public $team2;
    
    /*
     *  - 1. Angriff von Bromon mit dem höchsten Speed
     *  - team(1/2)[0] kämpfen zuerst gegeneinander (nach Reihenfolge)
     *  Damage = 100/(100+defense)*attack
     */
    
    
    function __construct($player1, $player2, $team1, $team2) {
        $this->player1 = $player1;
        $this->player2 = $player2;
        foreach( $team1 as $bromonID ){
            
            $this->team1[] = bromon($bromonID);
            
        }
        foreach( $team2 as $bromonID ){
            
            $this->team2[] = bromon($bromonID);
            
        }
    }
    
    function startFight(){/*
        $fightHistory = [];
        while 
        $fightHistory[] = */
        echo "AND THE WINNER IS root!";
    }
}