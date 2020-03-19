<?php

require_once __DIR__ . "/RootModel.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author SIT
 */
class Registration extends RootModel {

    private $refNo;
    private $name;
    private $gender;
    private $dob;
    private $faculty;
    private $level;
    private $mobile;
    private $email;
    private $status;
    private $approval;
    private $blackList;

    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "registration";
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

    public function setFaculty($faculty) {
        $this->faculty = $faculty;
    }

    public function getFaculty() {
        return $this->faculty;
    }

    public function setlevel($level) {
        $this->level = $level;
    }

    public function getlevel() {
        return $this->level;
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
    
    public function setApproval($approval) {
        $this->approval = $approval;
    }

    public function getApproval() {
        return $this->approval;
    }

    public function setBlackList($blackList) {
        $this->blackList = $blackList;
    }

    public function getBlackList() {
        return $this->blackList;
    }

    public function createStudent() {
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table .
                " (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
                VALUES (:refNo, :name, :gender, :dob, :faculty, :level , :mobile, :email, :status,:approval, :blackList)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->name,
            "gender" => $this->gender,
            "dob" => $this->dob,
            "faculty" => $this->faculty,
            "level" => $this->level,
            "mobile" => $this->mobile,
            "email" => $this->email,
            "status" => $this->status,
            "approval" => $this->approval,
            "blackList" => $this->blackList
        ));
        //$this->getDBconnection = null;

        return $result;
    }
    
    
    public function updateStudent($ref){
        $sql = $this->getDBconnection->prepare(
                " UPDATE " . $this->table . "  
            SET                
                name= :name, 
                gender= :gender, 
                dob= :dob, 
                faculty= :faculty, 
                level= :level , 
                mobile= :mobile, 
                email= :email, 
                status= :status,
                approval= :approval, 
                blackList= :blackList

            WHERE refNo = :refNo 
        ");

        $result = $sql->execute(array(
            "name" => $this->name,
            "gender" => $this->gender,
            "dob" => $this->dob,
            "faculty" => $this->faculty,
            "level" => $this->level,
            "mobile" => $this->mobile,
            "email" => $this->email,
            "status" => $this->status,
            "approval" => $this->approval,
            "blackList" => $this->blackList,
            "refNo" => trim($ref)
        ));
        return $result; //true if OK.
        
    }
    
    public function addToSystem($ref){
        echo 'reference  addToSystem :  '.$ref.'<br>';
        $sql = $this->getDBconnection->prepare(
                " UPDATE " . $this->table . "  
            SET                                
                approval= :approval 

            WHERE refNo = :refNo 
        ");

        $result = $sql->execute(array(
            "approval" => 1,
            "refNo" => trim($ref)
        ));
        return $result; //true if OK.
        
    }
        

    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM  " . $this->table);
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "St-000000") || ($result == null)) {
            $id = "St-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('St-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }

    public function getRowById($refNo) {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE refNo = :refNo ");
        $sql->execute(array(
            "refNo" => trim($refNo)
        ));
        $result = $sql->fetchObject();
        $student = new Registration($this->getDBconnection);
        $student = $result;
        $this->getDBconnection = null;
        return $student;
    }
    
    public function getApplicantRequest() {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE status = :status and approval= :approval");
        $sql->execute(array(
            "status" => 1,
            "approval" => 0
        ));
        $result = $sql->fetchAll();         
        $this->getDBconnection = null;
        return $result;
    }

    public function getRegisteredStudent() {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE status = :status and approval= :approval");
        $sql->execute(array(
            "status" => 1,
            "approval" => 1
        ));
        $result = $sql->fetchAll();         
        $this->getDBconnection = null;
        return $result;
    }

    public function getNotRegisteredStudent() {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . " WHERE status = :status and approval= :approval and blackList= :blackList");
        $sql->execute(array(
            "status" => 0,
            "approval" => 0,
            "blackList"=>0
        ));
        $result = $sql->fetchAll();         
        $this->getDBconnection = null;
        return $result;
    }

}
