<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Match
 *
 * @author 95tha
 */
class Match extends RootModel {
    private $refNo;
    private $endTime ;
    private $name ;
    private $team1 ;
    private $team2 ;
    private $match_count ;
    private $team1_player ;
    private $team2_player ;
    private $team1_player1 ;
    private $team1_player2 ;
    private $team2_player1 ;
    private $team2_player2 ;
    private $win ;
    private $type ;
    
  public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "bad_match";
    }

    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    public function getRefNo() {
        return $this->refNo;
    }
    
    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }        
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }         
    public function setTeam1($team1) {
        $this->team1 = $team1;
    }

    public function getTeam1() {
        return $this->team1;
    }
    
    public function setTeam2($team2) {
        $this->team2 = $team2;
    }

    public function getTeam2() {
        return $this->team2;
    }
    
    public function setMatch_count($match_count) {
        $this->match_count = $match_count;
    }

    public function getMatch_count() {
        return $this->match_count;
    }
    
    public function setTeam1_player($team1_player) {
        $this->team1_player = $team1_player;
    }

    public function getTeam1_player() {
        return $this->team1_player;
    }
    
    public function setTeam2_player($team2_player) {
        $this->team2_player = $team2_player;
    }

    public function getTeam2_player() {
        return $this->team2_player;
    }
    
    public function setTeam1_player1($team1_player1) {
        $this->team1_player1 = $team1_player1;
    }

    public function getTeam1_player1() {
        return $this->team1_player1;
    }
    
    public function setTeam1_player2($team1_player2) {
        $this->team1_player2 = $team1_player2;
    }

    public function getTeam1_player2() {
        return $this->team1_player2;
    }
    
    
    public function setTeam2_player1($team2_player1) {
        $this->team2_player1 = $team2_player1;
    }

    public function getTeam2_player1() {
        return $this->team2_player1;
    }
    
    public function setTeam2_player2($team2_player2) {
        $this->team2_player2 = $team2_player2;
    }

    public function getTeam2_player2() {
        return $this->team2_player2;
    }
    
    public function setWin($win) {
        $this->win = $win;
    }

    public function getWin() {
        return $this->win;
    }
    
    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
    
    
    public function createTournement() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table .
        " (refNo,  endTime, name, team1, team2,  match_count, team1_player, team2_player 
                ,team1_player1,  team1_player2, team2_player1, team2_player2 ,win,  type )
        VALUES (:refNo, :endTime, :name, :team1, :team2, :match_count, :team1_player, :team2_player
                , :team1_player1, :team1_player2, :team2_player1, :team2_player2, :win, :type )");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "endTime" => $this->endTime,
            "name" => $this->name,
            "team1" => $this->team1,
            "team2" => $this->team2,
            "match_count" => $this->match_count,
            "team1_player" => $this->team1_player,
            "team2_player" => $this->team2_player,
            "team1_player1" => $this->team1_player1,
            "team1_player2" => $this->team1_player2,
            "team2_player1" => $this->team2_player1,
            "team2_player2" => $this->team2_player2,
            "win" => $this->win,
            "type" => $this->type
        ));
        //$this->getDBconnection = null;

        return $result;
    }
    
    
    public function createSingleMatch() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table .
        " (refNo,  endTime, name, team1, team2,  match_count, team1_player, team2_player ,win,  type )
        VALUES (:refNo, :endTime, :name, :team1, :team2, :match_count, :team1_player, :team2_player , :win, :type )");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "endTime" => $this->endTime,
            "name" => $this->name,
            "team1" => $this->team1,
            "team2" => $this->team2,
            "match_count" => $this->match_count,
            "team1_player" => $this->team1_player,
            "team2_player" => $this->team2_player,
            "win" => $this->win,
            "type" => $this->type
        ));
        //$this->getDBconnection = null;

        return $result;
    }
    
    
    public function createDoubleMatch() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table .
        " (refNo,  endTime, name, team1, team2,  match_count
                ,team1_player1,  team1_player2, team2_player1, team2_player2 ,win,  type )
        VALUES (:refNo, :endTime, :name, :team1, :team2, :match_count
                , :team1_player1, :team1_player2, :team2_player1, :team2_player2, :win, :type )");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "endTime" => $this->endTime,
            "name" => $this->name,
            "team1" => $this->team1,
            "team2" => $this->team2,
            "match_count" => $this->match_count,
            "team1_player1" => $this->team1_player1,
            "team1_player2" => $this->team1_player2,
            "team2_player1" => $this->team2_player1,
            "team2_player2" => $this->team2_player2,
            "win" => $this->win,
            "type" => $this->type
        ));
        //$this->getDBconnection = null;

        return $result;
    }
    
    
    public function getNextId() {
        echo '--------'.$this->table.'---------<br>';
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM ".$this->table." ");
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "Mat-000000") || ($result == null)) {
            $id = "Mat-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('Mat-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
}
    