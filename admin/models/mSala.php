<?php

require_once '../action/aSala.php';

class mSala extends aSala{
 
    protected $table='sala';
    
        private $idSala;
        private $nomeSala;
        private $capacidade;

        function getIdSala() {
            return $this->idSala;
        }

        function getNomeSala() {
            return $this->nomeSala;
        }

        function getCapacidade() {
            return $this->capacidade;
        }

        function setIdSala($idSala) {
            $this->idSala = $idSala;
        }

        function setNomeSala($nomeSala) {
            $this->nomeSala = $nomeSala;
        }

        function setCapacidade($capacidade) {
            $this->capacidade = $capacidade;
        }
                
    public function insert() {
        $sql="insert into $this->table(nomeSala,capacidade) values (:nomeSala,:capacidade)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nomeSala', $this->nomeSala);
        $stmt->bindParam(':capacidade', $this->capacidade);     
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set nomeSala=:nomeSala,capacidade=:capacidade where id=:idSala"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nomeSala', $this->nomeSala);
        $stmt->bindParam(':capacidade', $this->capacidade);
        $stmt->bindParam(':idSala', $this->idSala);     
        return $stmt->execute();
    }
}