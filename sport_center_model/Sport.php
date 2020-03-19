<?php

require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Skill
 *
 * @author SIT
 */
class Sport extends RootModel {

    private $refNo;
    private $name;
    private $description;

    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "sport";
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
    
    public function setSkillDescription($description) {
        $this->description = $description;
    }

    public function getSkillDescription() {
        return $this->description;
    }

    public function createSkill() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . " (refNo,name,description)
                                        VALUES (:refNo,:name,:description)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->name,
            "description" => $this->description
        ));
        //$this->getDBconnection = null;
        return $result; //true if OK.
    }

    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM sport" );
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "sp-000000") || ($result == null)) {
            $id = "sp-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('sp-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
    
    public function getRowById($refNo) {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE refNo = :refNo ");
        $sql->execute(array(
            "refNo" => $refNo           
        ));
        $result = $sql->fetchObject();        
        $sport = new Skill($this->getDBconnection);
        $sport=$result;        
        //$this->getDBconnection = null;
        return $sport;
    }
    public function getRowByName($name) {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE name = :name ");
        $sql->execute(array(
            "name" => $name
        ));
        $result = $sql->fetchObject();
        $sport = new Sport($this->getDBconnection);
        $sport = $result;
        //$this->getDBconnection = null;
        return $sport;
    }

}
