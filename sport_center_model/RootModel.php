<?php


class RootModel {
    protected $table="";
    protected $getDBconnection;
    protected  $id;
    
    public function __construct($getDBconnection) {
        $this->getDBconnection=$getDBconnection;
    }
    
    
    public function setTable($table) {
        $this->table = $table;
    }
    public function setId($id) {
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function gettAll(){
        $sql= $this->getDBconnection->prepare("select * from " .$this->table);
        $sql->execute();
         /* Fetch all of the remaining rows in the result set */
        $result=$sql->fetchAll();
        //$this->getDBconnection=null;
        return $result;
    }
    public function getById($idName,$idValue){
        $sql = $this->getDBconnection->prepare("SELECT * FROM skill WHERE description=".trim($idValue));
        //$sql = $this->getDBconnection->prepare("SELECT * FROM " . $this->table . " WHERE " . trim($idName) . "=".trim($idValue));
        //$sql->execute();
        $sql->execute();
        $result = $sql->fetchObject();
        //echo $result->{"skillId"};
        //$this->getDBconnection = null; 
        return $result;
    }
    public function getByColumn($column,$value){
        $sql = $this->getDBconnection->prepare("SELECT * 
                                                FROM " . $this->table . " WHERE " . $column . " = :value");
        $sql->execute(array(
            "value" => $value
        ));
        $result = $sql->fetchAll();
        $this->getDBconnection = null; //close the connection
        return $result;
    }
    
    public function deleteById($id){
        try {
            $sql = $this->getDBconnection->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
            $sql->execute(array(
                "id" => $id
            ));
            $conn = null;
        } catch (Exception $e) {
            echo 'Faile the DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }
    
    public function deleteByColumn($column,$value){
        try {
            $sql = $this->getDBconnection->prepare("DELETE FROM " . $this->table . " WHERE :column = :value");
            $sql->execute(array(
                "column" => $value,
                "value" => trim($value)
            ));
            $conn = null;
        } catch (Exception $e) {
            echo 'Faile the DELETE (deleteBy): ' . $e->getMessage();
            return -1;
        }
    }
}
