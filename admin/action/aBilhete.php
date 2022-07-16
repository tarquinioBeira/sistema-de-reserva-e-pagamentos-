<?php
require_once'../db/db.php';
abstract class aBilhete extends DB{
    
    protected $table;
    
    abstract public function insert();
    
    public function find($id){
        $sql = "select *from $this->table where idBilhete=".$id;
       $stmt = DB::prepare($sql);
       $stmt->execute();
       return $stmt->fetch();
    }

    public function lastBilhete(){
    $sql = "SELECT numero FROM $this->table ORDER BY idBilhete DESC LIMIT 1";
    $stmt=DB::prepare($sql);
    $stmt->execute();
     return $stmt->fetch();
    }

    
    public function findAll(){    
    $sql="select *from $this->table";
    $stmt=DB::prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    }

}
