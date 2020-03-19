<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Batminton
 *
 * @author 95tha
 */
class Badminton extends RootModel {

    private $refNo;
    private $description;
    private $notiRef;
    
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "batminton";
    }

    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    public function getRefNo() {
        return $this->refNo;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }
    
    public function setNotiRef($notiRef) {
        $this->notiRef = $notiRef;
    }

    public function getNotiRef() {
        return $this->notiRef;
    }
    public function create() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . " (refNo,description,notiRef)
                                        VALUES (:refNo,:description,:notiRef)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "description" => $this->description,
            "notiRef" => $this->notiRef
        ));
        $this->getDBconnection = null;
        return $result; //true if OK.
    }

    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM ". $this->table." "  );
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "S-Bat-000000") || ($result == null)) {
            $id = "S-Bat-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('S-Bat-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
}
