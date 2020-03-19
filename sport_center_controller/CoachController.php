<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoachController
 *
 * @author SIT
 */
class CoachController {

    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/Coach.php";
        require_once __DIR__ . "/../sport_center_model/Sport.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }

    public function run($action) {
        switch ($action) {
            case "newCoach" :
                $this->newCoach();
                break;
            case "newCoachDash" :
                $this->newCoachDash();
                break;
            case "create" :
                $this->createCoach();
                break;
            default:
                $this->newCoachDash();
                break;
        }
    }

    public function newCoach() {
        $coach = new Coach($this->getDBconnection);
        $count = $coach->getNextId();
        $this->view("CoachCreate", array(
            "coach" => $coach,
            "count" => $count,
            "title" => "Service Station"
        ));
    }

    public function newCoachDash() {

        $this->view("CoachDashboard", array(
            "title" => "Service Station"
        ));
    }

    public function createCoach() {
        echo '-----------createCoach-----<br>';
        if (isset($_POST["refNo"])) {
            echo 'createCoach-----' . $_POST["refNo"] . '<br>';
            $coach = new Coach($this->getDBconnection);
            $coach->setRefNo($_POST["refNo"]);
            $coach->setName($_POST["name"]);
            $coach->setGender($_POST["gender"]);
            $coach->setDob($_POST["dob"]);
            $coach->setMobile($_POST["mobile"]);
            $coach->setEmail($_POST["email"]);
            $coach->setStatus(1);
            $coach->setBlackList(0);

            $save = $coach->createCoach();

            if ($save) {
                $sport = new Sport($this->getDBconnection);
                $sport = $sport->gettAll();

                $sportA = array();
                foreach ($sport as $value) {
                    array_push($sportA, $value["name"]);
                }
                var_dump($sportA);

                header("Location:SportALSelectSportsForCoach.php?coachId=" . $_POST["refNo"] . "&coachName=" . $_POST["name"] . "&sportA=" . json_encode($sportA) . "");
            }
        }


        $this->run("newCoachDash");
    }

    public function view($value, $data) {

        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
