<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SkillController
 *
 * @author SIT
 */
class SportController {
    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/Sport.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }
    
    public function run($action) {
        switch ($action) {
            case "newSkill" :
                $this->newSkill();
                break;
            case "newSkillDash" :
                $this->newSkillDash();
                break;
            case "create" :
                $this->createSkill();
                break;
             case "goSport" :
                $this->goSport();
                break;
            default:
                $this->newSkillDash();
                break;
        }
    }

    public function newSkill() {
        $skill = new Sport($this->getDBconnection);
        $count = $skill->getNextId();
        $this->view("SportCreate", array(
            "skill" => $skill,
            "count" => $count,
            "title" => "Sport Center"
        ));
    }
    
    public function newSkillDash() {

        $this->view("DashboardSport", array(
            "title" => "Sport Center"
        ));
    }

    public function createSkill() {
        if (isset($_POST["refNo"])) {
            $skill = new Sport($this->getDBconnection);
            $skill->setRefNo($_POST["refNo"]);
            $skill->setName($_POST["name"]);
            $skill->setSkillDescription($_POST["description"]);
            
            
           
            $save = $skill->createSkill();
        }
         
        //header("Location:index.php?controller=student&action=detaile&id=" . $_POST["university"]);
        $this->run("newSkillDash");
    }

    public function goSport() {
        $sport = $_REQUEST["sportName"];
        $dash = ucwords($sport).'Dashboard' ;
        $this->view($dash, array(
            "title" => "Sport Management System"
        ));
    }

    public function view($value, $data) {
        
        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
