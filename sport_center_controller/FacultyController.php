<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacultyController
 *
 * @author 95tha
 */
class FacultyController {
    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/Faculty.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }
    
    public function run($action) {
        switch ($action) {
            case "newFaculty" :
                $this->newFaculty();
                break;
            case "newFacultyDash" :
                $this->newFacultyDash();
                break;
            case "create" :
                $this->createFaculty();
                break;
            default:
                $this->newFacultyDash();
                break;
        }
    }

    public function newFaculty() {
        $faculty = new Faculty($this->getDBconnection);
        $count = $faculty->getNextId();
        $this->view("CreateFaculty", array(
            "faculty" => $faculty,
            "count" => $count,
            "title" => "Sport Center"
        ));
    }
    
    public function newFacultyDash() {

        $this->view("DashboardFaculty", array(
            "title" => "Sport Center"
        ));
    }

    public function createFaculty() {
        echo 'Controller save <br>';
        if (isset($_POST["refNo"])) {
            $faculty = new Faculty($this->getDBconnection);
            $faculty->setRefNo($_POST["refNo"]);
            $faculty->setName($_POST["name"]);
                       
            $save = $faculty->createFaculty();
        }
         
        //header("Location:index.php?controller=student&action=detaile&id=" . $_POST["university"]);
        $this->run("newFacultyDash");
    }

    public function view($value, $data) {
        
        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }
}
