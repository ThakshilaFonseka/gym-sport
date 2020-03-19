<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BatmintonController
 *
 * @author 95tha
 */
class BadmintonController {

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/Match.php";
        require_once __DIR__ . "/../sport_center_model/Faculty.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }

    public function run($action) {
        switch ($action) {
            case "newMatch" :
                $this->newMatch();
                break;
            case "BatmintonDash" :
                $this->BatmintonDash();
                break;
            case "create" :
                $this->create();
                break;
            default:
                $this->BatmintonDash();
                break;
        }
    }

    public function newMatch() {
        echo 'newBatminton---controller <br>';
        $match =new Match($this->getDBconnection);
        $count =$match->getNextId();
        $faculty = new Faculty($this->getDBconnection);
        $faculty = $faculty->gettAll();
        
        $this->view("BadmintonShedule", array(
            "faculty" => $faculty,
            "count" => $count,
            "title" => "Sport Center"
        ));
    }

    public function BatmintonDash() {

        $this->view("BadmintonDashboard", array(
            "title" => "Sport Center"
        ));
    }

    public function create() {
        if (isset($_POST["refNo"])) {
            $batminton = new Badminton($this->getDBconnection);
            $batminton->setRefNo($_POST["refNo"]);
            var_dump($_POST["description"]);
            echo '-----<br>';
            $batminton->setDescription($_POST["description"]);
            $save = $batminton->create();
        }
        $this->run("BadmintonDash");
    }
    
    public function createSingleMatch() {
        if (isset($_REQUEST["refNo"])) {
            $match = new Match($this->getDBconnection);
            $match->setRefNo($_REQUEST["refNo"]);
            $match->setTeam1($_REQUEST["team1"]);
            $match->setTeam2($_REQUEST["team2"]);
            $match->setEndTime($_REQUEST["endTime"]);
            $match->setMatch_count($_REQUEST["match_count"]);
            $match->setTeam1_player($_REQUEST["team1_player"]);
            $match->setTeam2_player($_REQUEST["team2_player"]);
            $match->setType("sin");
            //$match->setWin($_REQUEST["win"]);
            //$match->setType($_REQUEST["type"]);
           
            $save = $match->createSingleMatch();
        }
        $this->run("BadmintonDash");
    }
    
    public function createDoubleMatch() {
        if (isset($_REQUEST["refNo"])) {
            $match = new Match($this->getDBconnection);
            $match->setRefNo($_REQUEST["refNo"]);
            $match->setTeam1($_REQUEST["team1"]);
            $match->setTeam2($_REQUEST["team2"]);
            $match->setEndTime($_REQUEST["endTime"]);
            $match->setMatch_count($_REQUEST["match_count"]);
            $match->setTeam1_player1($_REQUEST["team1_player1"]);
            $match->setTeam1_player2($_REQUEST["team1_player2"]);
            $match->setTeam2_player1($_REQUEST["team2_player1"]);
            $match->setTeam2_player2($_REQUEST["team2_player2"]);
            $match->setType("dou");
            //$match->setWin($_REQUEST["win"]);
            //$match->setType($_REQUEST["type"]);
           
            $save = $match->createSingleMatch();
        }
        $this->run("BadmintonDash");
    }

    
    public function createTournementMatch() {
        if (isset($_REQUEST["refNo"])) {
            $match = new Match($this->getDBconnection);
            $match->setRefNo($_REQUEST["refNo"]);
            $match->setTeam1($_REQUEST["team1"]);
            $match->setTeam2($_REQUEST["team2"]);
            $match->setEndTime($_REQUEST["endTime"]);
            $match->setMatch_count($_REQUEST["match_count"]);
            $match->setTeam1_player($_REQUEST["team1_player"]);
            $match->setTeam2_player($_REQUEST["team2_player"]);
            $match->setTeam1_player1($_REQUEST["team1_player1"]);
            $match->setTeam1_player2($_REQUEST["team1_player2"]);
            $match->setTeam2_player1($_REQUEST["team2_player1"]);
            $match->setTeam2_player2($_REQUEST["team2_player2"]);
            $match->setType("tou");
            //$match->setWin($_REQUEST["win"]);
            //$match->setType($_REQUEST["type"]);
           
            $save = $match->createTournement();
        }
        $this->run("BadmintonDash");
    }
    
    
    public function view($value, $data) {

        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
