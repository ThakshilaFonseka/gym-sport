<?php

require_once __DIR__ . "/RootModel.php";
require_once __DIR__ . "/../sport_center_model/Sport.php";

class User extends RootModel{
    private $refNo;
    private $userName;
    private $password;
    private $type;
    
    public function __construct($getDBconnection) {
        parent::__construct($getDBconnection);
        $this->table = "user";
    }

    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    public function getRefNo() {
        return $this->refNo;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getUserName() {
        return $this->userName;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
    
    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
    
    
    
    public function createUser() {
        echo 'User create model   <br>';
        $sql = $this->getDBconnection->prepare("INSERT INTO " . $this->table . 
                " (refNo,  name, password, type)
                VALUES (:refNo, :name,  :password, :type)");
        $result = $sql->execute(array(
            "refNo" => $this->refNo,
            "name" => $this->userName,
            "password" => $this->password,
            "type" => $this->type
        ));
        $this->getDBconnection = null;

        return $result; //true if OK.
    }

    public function getNextId() {
        $sql = $this->getDBconnection->prepare("SELECT MAX(refNo) FROM  " . $this->table);
        $sql->execute();
        $result = $sql->fetchObject();
        $result = $result->{'MAX(refNo)'};
        if (($result == "User-000000") || ($result == null)) {
            $id = "User-000001";
        } else {
            $num = preg_replace('/\D/', '', $result);
            $id = sprintf('User-%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        }
        return $id; //true if OK.
    }
    
    public function searchLogin($userId,$pwd) {
        $sql = $this->getDBconnection->prepare("SELECT *  FROM " . $this->table . 
                " WHERE refNo = :refNo and password = :password");
        $sql->execute(array(
            "refNo" => $userId ,
            "password" => $pwd  
        ));
        $result = $sql->fetchObject();            
        $sport = new Sport($this->getDBconnection);
        $sport=$result;        
        //$this->getDBconnection = null;
        return $sport;
    }

}
