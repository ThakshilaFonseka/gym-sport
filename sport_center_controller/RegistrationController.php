<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerController
 *
 * @author SIT
 */
class RegistrationController {

    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/Registration.php";
        require_once __DIR__ . "/../sport_center_model/Faculty.php";
        require_once __DIR__ . "/../sport_center_model/Sport.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }

    public function run($action) {
        switch ($action) {
            case "newStudent" :
                $this->newStudent();
                break;
            case "studentDash" :
                $this->studentDash();
                break;
            case "apply" :
                $this->apply();
                break;
            case "applicant" :
                $this->applicant();
                break;
            case "registration" :
                $this->registration();
                break;
            case "showRequest" :
                $this->showRequest();
                break;
            case "add" :
                $this->addToSystem();
                break;
            default:
                $this->studentDash();
                break;
        }
    }

   

    public function studentDash() {
        $this->view("RegistrationView", array(
            "title" => "Service Station"
        ));
    }

    public function apply() {
        $student = new Registration($this->getDBconnection);
        $student = $student->getNotRegisteredStudent();
        $this->view("RegistrationApplyStudent", array(
            "student" => $student,
            "title" => "Service Station"
        ));
    }

    public function applicant() {
        if (isset($_POST["studentId"])) {
            $refNo = $_POST["studentId"];
            $student = new Registration($this->getDBconnection);
            $student = $student->getRowById(trim($refNo));
            $faculty = new Faculty($this->getDBconnection);
            $faculty = $faculty->gettAll();
            if ($student != false) {
                $this->view("RegistrationView", array(
                    "refNo" => $refNo,
                    "name" => $student->{'name'},
                    "gender" => $student->{'gender'},
                    "dob" => $student->{'dob'},
                    "faculty" => $faculty,
                    "stuFaculty" => $student->{'faculty'},
                    "email" => $student->{'email'},
                    "mobile" => $student->{'mobile'},
                    "title" => "Service Station"
                ));
            } else {
                $student = new Registration($this->getDBconnection);
                $student = $student->gettAll();
                $this->view("RegistrationApplyStudent", array(
                    "student" => $student,
                    "title" => "Service Station"
                ));
            }
        }
    }

    public function registration() {
        if (isset($_POST["refNo"])) {
            $refNo = $_POST["refNo"];
            $student = new Registration($this->getDBconnection);
            $student = $student->getRowById($refNo);
            $student1 = new Registration($this->getDBconnection);
            $student1->setName($_POST["name"]);
            $student1->setGender($_POST["gender"]);
            $student1->setDob($_POST["dob"]);
            $student1->setFaculty($_POST["facultyN"]);
            $student1->setlevel($_POST["level"]);
            $student1->setMobile($_POST["mobile"]);
            $student1->setEmail($_POST["email"]);
            $student1->setStatus(1);
            $student1->setApproval(0);
            $student1->setBlackList(0);

            $save = $student1->updateStudent($refNo);
            if ($save) {
                
            $sport = new Sport($this->getDBconnection);
            $sport = $sport->gettAll();

            $sportA = array();
            foreach ($sport as $value) {
                array_push($sportA, $value["name"]);
            }
            var_dump($sportA);

            header("Location:SportALSelectSportsForStudent.php?studentId=" . $_POST["refNo"] . "&studentName=" . $_POST["name"] . "&sportA=" . json_encode($sportA) . "");
        
            }

            
            }

        //header("Location:index.php?controller=student&action=detaile&id=" . $_POST["university"]);
        $this->run("studentDash");
    }

    public function addToSystem() {
        $student = new Registration($this->getDBconnection);
        $add = $student->addToSystem($_REQUEST["id"]);
        $students = $student->getApplicantRequest();
        $this->view("viewRequest", array(
            "students" => $students,
            "title" => "Service Station"
        ));
    }

    public function showRequest() {
        $student = new Registration($this->getDBconnection);
        $students = $student->getApplicantRequest();
        $this->view("viewRequest", array(
            "students" => $students,
            "title" => "Service Station"
        ));
    }

    
    
    public function view($value, $data) {
        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
