<?php

class bromon {
    public $ID;
    public $name;
    public $lvl;
    public $exp;
    
    public $attack;
    public $defense;
    public $health;
    public $speed;      // dodging
    public $type;       // Inferno, Frost, Kraft...
    public $attackID1Scale;
    public $attackID2Scale;
    public $attackID3Scale;
    public $attackID4Scale;  // special attack  
    public $status;     // frozen, burned, crazy   
    
    public function __construct($usersBromonsID) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $mysqli->connect_MYSQL();
        $sql = "SELECT 
                    bromonID,
                    name,
                    attack, 
                    defense, 
                    health, 
                    speed, 
                    attackID1Scale, 
                    attackID2Scale, 
                    attackID3Scale, 
                    attackID4Scale
               FROM
                    usersBromons
               WHERE
                    ID = $usersBromonsID"; 
        
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->execute();    
            $stmt->store_result();
            $stmt->bind_result($this->ID, $this->name, 
                               $this->attack, $this->defense, 
                               $this->health, $this->speed, 
                               $this->type, $this->attackID1Scale, 
                               $this->attackID2Scale, $this->attackID2Scale, 
                               $this->attackID3Scale, $this->attackID4Scale);
            $stmt->fetch();
        }
    }
};

bromon(1);