<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Batch
 *
 * @author 95tha
 */
class Batch extends RootModel {
    private $refNo;
    private $name;
    private $faculty;
    
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "batch";
    }

    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    public function getRefNo() {
        return $this->refNo;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    public function setFaculty($faculty) {
        $this->faculty = $faculty;
    }

    public function getFaculty() {
        return $this->faculty;
    }
    
    public function createBatch() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table .
                " (refNo,  name, faculty )
                VALUES (:refNo, :name, :faculty)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->name,
            "faculty" => $this->faculty
        ));
        //$this->getDBconnection = null;

        return $result;
    }
}
