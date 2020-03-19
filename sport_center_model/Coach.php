<?php
require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coach
 *
 * @author SIT
 */
class Coach extends RootModel{
    private $refNo;
    private $name;
    private $gender;
    private $dob;
    private $mobile;
    private $email;
    private $status;
    private $blackList;
    
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "coach";
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
    
    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }
    
    public function setDob($dob) {
        $this->dob = $dob;
    }

    public function getDob() {
        return $this->dob;
    }
    
    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getMobile() {
        return $this->mobile;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }
    
    public function setBlackList($blackList) {
        $this->blackList = $blackList;
    }

    public function getBlackList() {
        return $this->blackList;
    }
    
    public function createCoach() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . 
                " (refNo,  name, gender, dob, mobile, email, status, blackList)
                VALUES (:refNo, :name, :gender, :dob, :mobile, :email, :status, :blackList)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->name,
            "gender" => $this->gender,
            "dob" => $this->dob,
            "mobile" => $this->mobile,
            "email" => $this->email,
            "status" => $this->status,
            "blackList" => $this->blackList
        ));
        //$this->getDBconnection = null;

        return $result; //true if OK.
    }

    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM " . $this->table);
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "Co-000000") || ($result == null)) {
            $id = "Co-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('Co-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
    
    public function getRowById($refNo) {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE refNo = :refNo ");
        $sql->execute(array(
            "refNo" => $refNo           
        ));
        $result = $sql->fetchObject();        
        $coach = new Coach($this->getDBconnection);
        $coach=$result;        
        //$this->getDBconnection = null;
        return $coach;
    }
    
}
