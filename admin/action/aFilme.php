<?php
require_once'../db/db.php';
abstract class aFilme extends DB{
    
    protected $table;
    
    abstract public function insert();
    
    public function find($id){
        $sql = "select *from $this->table where idUsuario=".$id;
       $stmt = DB::prepare($sql);
       $stmt->execute();
       return $stmt->fetch();
    }

    public function lastId(){
    $sql = "SELECT * FROM $this->table ORDER BY idUsuario DESC LIMIT 1";
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

        public function findUser($nome,$apelido){
       $sql = "select *from $this->table where nomeUsuario=".$nome." and apelidoUsuario=".$apelido;
       $stmt = DB::prepare($sql);
       $stmt->execute();
       return $stmt->fetch();
    }

}
