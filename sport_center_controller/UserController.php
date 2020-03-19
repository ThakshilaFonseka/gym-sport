<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author 95tha
 */
class UserController {

    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/User.php";
        require_once __DIR__ . "/../sport_center_model/SportAllocation.php";

        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }

    public function run($action) {
        switch ($action) {
            case "newUser" :
                $this->newUser();
                break;
            case "userDash" :
                $this->userDash();
                break;
            case "create" :
                $this->createUser();
                break;
            case "loginUser" :
                $this->loginUser();
                break;
            case "login" :
                $this->login();
                break;
            default:
                $this->userDash();
                break;
        }
    }

    public function newUser() {
        //$user = new User($this->getDBconnection);
        //$count = $user->getNextId();
        $this->view("UserCreate", array(
            //"user" => $user,
            //"count" => $count,
            "title" => "Sport Management"
        ));

        //$this->view("CreateUser");
    }

    public function userDash() {

        $this->view("DashboardUser", array(
            "title" => "Service Station"
        ));
    }

    public function createUser() {
        if (isset($_POST["refNo"])) {
            $user = new User($this->getDBconnection);
            $user->setRefNo($_POST["refNo"]);
            $user->setUserName($_POST["name"]);
            $user->setPassword($_POST["pwd"]);
            $user->setType($_POST["uType"]);

            $save = $user->createUser();
        }

        //header("Location:index.php?controller=student&action=detaile&id=" . $_POST["university"]);
        $this->run("userDash");
    }

    public function loginUser() {

        $this->view("LoginUser", array(
            "title" => "Sport Management System"
        ));
    }

    public function login() {
        if (isset($_POST["userId"])) {
            $userId = $_POST["userId"];
            $pwd = $_POST["pwd"];
            $user = new User($this->getDBconnection);
            $user = $user->searchLogin($userId, $pwd);
            if ($user) {
                if ($user->{'type'} == 'admin') {
                    $this->view("ManageDashboard", array(
                        "title" => "Sport Management System"
                    ));
                } elseif ($user->{'type'} == 'coach') {
                    $sportAllocation = new SportAllocation($this->getDBconnection);
                    $sports = array();
                    $sports = $sportAllocation->searchLoginPage($userId, "sport");
                    $this->view("CoachHome", array(
                        "sports" => $sports,
                        "title" => "Sport Management System"
                    ));
                } elseif ($user->{'type'} == 'player') {
                    
                } elseif ($user->{'type'} == 'captaion') {
                    
                } elseif ($user->{'type'} == 'wiseCaption') {
                    
                } elseif (trim($user->{'type'}) == 'student') {
                    echo 'student <br>';
                    $sportAllocation = new SportAllocation($this->getDBconnection);
                    $sports = array();
                    $sports = $sportAllocation->searchLoginPage($userId, "sport");
                    $this->view("UserHome", array(
                        "sports" => $sports,
                        "title" => "Sport Management System"
                    ));
                } elseif ($user == 'other') {
                    
                }
            }
        }
    }

    
    public function view($value, $data) {
        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
