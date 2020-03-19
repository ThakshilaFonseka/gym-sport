<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of University
 *
 * @author 95tha
 */
class University extends RootModel{
    private $refNo;
    private $name;
    
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "university";
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
    
    public function createUniversity() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . " (refNo,name)
                                        VALUES (:refNo,:name)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->name
        ));
        $this->getDBconnection = null;
        return $result; 
    }
    
    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM ".$this->table );
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "Uni-000000") || ($result == null)) {
            $id = "Uni-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('Uni-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
}
