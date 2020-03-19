<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connector
 *
 * @author SIT
 */
class DBconnection {
    private $driver;
    private $host;
    private $user;
    private $password;
    private $database;
    private $charset;
    
    public function __construct() {
        $db_cnf= require_once '../sport_center_config/Database.php';
        $this->driver=DB_DRIVER;
        $this->host=DB_HOST;//server
        $this->user=DB_USER;
        $this->password=DB_PASS;
        $this->database=DB_DATABASE;
        $this->charset=DB_CHARSET;
                
    }
    public function getDBconnection() {
        $conPath= $this->driver . ':host=' .$this->host . ';dbname=' .$this->database . ';charset=' .$this->charset ;
        try {
            $conn=new PDO($conPath, $this->user, $this->password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
}
