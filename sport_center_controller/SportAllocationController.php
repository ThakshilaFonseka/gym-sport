<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SportAllocationController
 *
 * @author 95tha
 */
class SportAllocationController {

    private $DBconnection;
    private $getDBconnection;

    public function __construct() {
        require_once __DIR__ . "/../sport_center_connection/DBconnection.php";
        require_once __DIR__ . "/../sport_center_model/SportAllocation.php";
        require_once __DIR__ . "/../sport_center_model/Coach.php";
        require_once __DIR__ . "/../sport_center_model/Registration.php";
        require_once __DIR__ . "/../sport_center_model/Sport.php";



        $this->DBconnection = new DBconnection();
        $this->getDBconnection = $this->DBconnection->getDBconnection();
    }

    public function run($action) {
        switch ($action) {
            case "newSportALCoach" :
                $this->newSportALCoach();
                break;
            case "coachSportAL" :
                $this->coachSportAL();
                break;
            case "newSportALStudent" :
                $this->newSportALStudent();
                break;
            case "studentSportAL" :
                $this->studentSportAL();
                break;
            case "sportAllocationDash" :
                $this->sportAllocationDash();
                break;
            case "create" :
                $this->createSportAllocation();
                break;
            case "fileUpload" :
                $this->fileUpload();
                break;
            default:
                $this->sportAllocationDash();
                break;
        }
    }


    public function createSportAllocation() {
        if ($_POST['sport']) {
            $sport = array();
            $sport = $_POST['sport'];
            foreach ($sport as $value) {

                if (isset($_POST["refNo"])) {
                    $sportAllocation = new SportAllocation($this->getDBconnection);
                    $nextId = $sportAllocation->getNextId();

                    $sportAllocation->setRefNo($nextId);
                    $sportAllocation->setVenderRefNo($_POST["refNo"]);

                    $sport = new Sport($this->getDBconnection);
                    $sport = $sport->getRowByName(trim($value));

                    $sportAllocation->setSportRefNo($sport->{"refNo"});
                    $sportAllocation->setSport($sport->{"name"});

                    if (isset($_FILES["file"])) {
                        $allowedExts = array("doc", "docx", "pdf", "gif", "jpeg", "jpg", "png");
                        if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png") && ($_FILES["file"]["size"] < 2000000)) {
                            if ($_FILES["file"]["error"] > 0) {
                                //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                            } else {
                                //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                                //echo "Type: " . $_FILES["file"]["type"] . "<br>";
                                //echo "Size: " . ($_FILES["file"]["size"] / 200000) . " kB<br>";
                                //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                                if (file_exists("../upload/" . $_FILES["file"]["name"])) {
                                    //echo $_FILES["file"]["name"] . " already exists. ";
                                } else {
                                    $uploadPath = "../upload/" . $_FILES["file"]["name"];
                                    move_uploaded_file($_FILES["file"]["tmp_name"], $uploadPath);
                                    //echo "Stored in: " . "../upload/" . $_FILES["file"]["name"];
                                }
                            }
                        } else {
                            //echo "Invalid file";
                        }
                    } else {
                        //echo '---invalid file upload------<br>';
                    }                    
                    $save = $sportAllocation->createSportAllocation();
                }
            }
        }
        //$this->run("sportAllocationDash");
    }


    public function view($value, $data) {

        require_once __DIR__ . "/../sport_center_view/" . $value . ".php";
    }

}
