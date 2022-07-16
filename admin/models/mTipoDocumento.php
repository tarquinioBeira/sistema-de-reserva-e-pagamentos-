<?php

require_once '../action/aTipoDocumento.php';

class mTipoDocumento extends aTipoDocumento{
 
    protected $table='tipodocumento';
    
        private $idTipo;
        private $tipoDocumento;
        private $numeroDocumento;

        function getIdTipo() {
            return $this->idTipo;
        }

        function getTipoDocumento() {
            return $this->tipoDocumento;
        }

        function getNumeroDocumento() {
            return $this->numeroDocumento;
        }

        function setIdTipo($idTipo) {
            $this->idTipo = $idTipo;
        }

        function setTipoDocumento($tipoDocumento]) {
            $this->tipoDocumento = $tipoDocumento;
        }

        function setNumeroDocumento($numeroDocumento) {
            $this->numeroDocumento = $numeroDocumento;
        }
                
    public function insert() {
        $sql="insert into $this->table(tipoDocumento,numeroDocumento) values (:tipoDocumento,:numeroDocumento)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':tipoDocumento', $this->tipoDocumento);
        $stmt->bindParam(':numeroDocumento', $this->numeroDocumento);     
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set tipoDocumento=:tipoDocumento,numeroDocumento=:numeroDocumento where idTipo=:idTipo"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':tipoDocumento', $this->tipoDocumento);
        $stmt->bindParam(':numeroDocumento', $this->numeroDocumento);  
        $stmt->bindParam(':idTipo', $this->idTipo);   
        return $stmt->execute();
    }
}