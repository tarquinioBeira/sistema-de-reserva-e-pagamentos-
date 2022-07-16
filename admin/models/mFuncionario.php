<?php

require_once '../action/aFuncionario.php';
class mFuncionario extends aFuncionario {
    protected $table ='Funcionario';
    
    private $idFuncionario;
    private $idUsuario;
    private $idTipo;
    
    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdTipo() {
        return $this->idTipo;
    }

    
    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }
        public function insert() {
        $sql="insert into $this->table(idUsuario,idTipo) values (:idUsuario,:idTipo)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':idUsuario', $this->idUsuario);
        $stmt->bindParam(':idTipo', $this->idTipo);  
        return $stmt->execute();
    }
}
