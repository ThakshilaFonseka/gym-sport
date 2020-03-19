<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SportAllocation
 *
 * @author 95tha
 */
class SportAllocation extends RootModel {

    private $refNo;
    private $venderRefNo;
    private $sportRefNo;
    private $sport;
    private $accept;
    private $reject;
    private $onDateTime;
    
  
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "sport_allocation";
    }

    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    public function getRefNo() {
        return $this->refNo;
    }
    
    public function setVenderRefNo($venderRefNo) {
        $this->venderRefNo = $venderRefNo;
    }

    public function getVenderRefNo() {
        return $this->venderRefNo;
    }
    
    public function setSportRefNo($sportRefNo) {
        $this->sportRefNo = $sportRefNo;
    }

    public function getSportRefNo() {
        return $this->sportRefNo;
    }
    
    public function setSport($sport) {
        $this->sport = $sport;
    }

    public function getSport() {
        return $this->sport;
    }
    
    public function setAccept($accept) {
        $this->accept = $accept;
    }

    public function getAccept() {
        return $this->accept;
    }
    public function setReject($reject) {
        $this->reject = $reject;
    }

    public function getReject() {
        return $this->reject;
    }
    public function setOnDateTime($onDateTime) {
        $this->onDateTime = $onDateTime;
    }

    public function getOnDateTime() {
        return $this->onDateTime;
    }
  
    public function createSportAllocation() {
        //echo '$this->refNo---'.$this->refNo.'---$this->venderRefNo---'.$this->venderRefNo.'---$this->sportRefNo---'.$this->sport.'--- <br>';
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . 
                " (refNo,  venderRefNo, sportRefNo, sport, accept, reject, onDateTime)
                VALUES (:refNo, :venderRefNo,  :sportRefNo, :sport, :accept, :reject, :onDateTime)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "venderRefNo" => $this->venderRefNo,
            "sportRefNo" => $this->sportRefNo,
            "sport" => $this->sport,
            "accept" => $this->accept,
            "reject" => $this->reject,
            "onDateTime" => $this->onDateTime
        ));
        $this->getDBconnection = null;
        return $result; //true if OK.
    }
    
     
    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM  " . $this->table);
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "SA-000000") || ($result == null)) {
            $id = "SA-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('SA-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
    public function searchLoginPage($venderRefNo,$filter) {
        $sql = $this->getDBconnection->prepare("SELECT sport FROM " . $this->table . 
                " WHERE venderRefNo = :venderRefNo ");
        $sql->execute(array(
            "venderRefNo" => $venderRefNo 
        ));
        $result = $sql->fetchAll();    
        return $result;
    }
}
