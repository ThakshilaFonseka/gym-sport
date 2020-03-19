<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UniversityController
 *
 * @author 95tha
 */
class UniversityController {
    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/University.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }
    
    public function run($action) {
        switch ($action) {
            case "newUniversity" :
                $this->newUniversity();
                break;
            case "UniversityDash" :
                $this->UniversityDash();
                break;
            case "createUniversity" :
                $this->createUniversity();
                break;
            default:
                $this->UniversityDash();
                break;
        }
    }

    public function newUniversity() {
        $university = new University($this->getDBconnection);
        $count = $university->getNextId();
        $this->view("createUniversity", array(
            "university" => $university,
            "count" => $count,
            "title" => "Sport Center"
        ));
    }
    
    public function UniversityDash() {

        $this->view("DashboardUniversity", array(
            "title" => "Sport Center"
        ));
    }

    public function createUniversity() {
        echo 'createSkill<br>';
        if (isset($_POST["refNo"])) {
            $university = new University($this->getDBconnection);
            $university->setRefNo($_POST["refNo"]);
            $university->setName($_POST["name"]);
                       
            $save = $university->createUniversity();
        }
         
        //header("Location:index.php?controller=student&action=detaile&id=" . $_POST["university"]);
        $this->run("UniversityDash");
    }

    public function view($value, $data) {
        
        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }
}
