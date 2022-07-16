<?php
require_once '../action/aBilhete.php';
class mBilhete extends aBilhete {
    protected $table ='bilhete';
    
    private $idBilhete;
    private $numeroBilhete;
    private $tipoBilhete;
    private $estadoBilhete;
    private $idSessao;
    private $idCliente;
    private $horaCompra;
    private $fpagamento;
    private $idUsuario;

    function getIdBilhete() {
        return $this->idBilhete;
    }

    function getNumeroBilhete() {
        return $this->numeroBilhete;
    }

    function getTipoBilhete() {
        return $this->tipoBilhete;
    }

     function getEstadoBilhete() {
        return $this->estadoBilhete;
    }

    function getIdSessao() {
        return $this->idSessao;
    }

    function getIdCliente() {
        return $this->idCliente;
    }
    function getHoraCompra() {
            return $this->horaCompra;
    }
    function getFPagamento() {
            return $this->fpagamento;
    }
    function getIdUsuario() {
            return $this->idUsuario;
    }


    function setIdBilhete($idBilhete) {
        $this->idBilhete = $idBilhete;
    }

     function setNumeroBilhete($numeroBilhete) {
        $this->numeroBilhete = $numeroBilhete;
    }

     function setTipoBilhete($tipoBilhete) {
        $this->tipoBilhete = $tipoBilhete;
    }

      function setEstadoBilhete($estadoBilhete) {
        $this->estadoBilhete = $estadoBilhete;
    }

    function setIdSessao($idSessao) {
        $this->idSessao = $idSessao;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setHoraCompra($horaCompra) {
        $this->horaCompra = $horaCompra;
    }
    
    function setFPagamento($fpagamento) {
        $this->fpagamento = $fpagamento;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
        public function insert() {
        $sql="insert into $this->table(numeroBilhete,estadoBilhete,tipoBilhete,idUsuario,idSessao,idCliente,fpagamento) values (:numeroBilhete,:estadoBilhete,:tipoBilhete,:idUsuario,:idSessao,idCliente,fpagamento)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':numeroBilhete', $this->numeroBilhete);
        $stmt->bindParam(':estadoBilhete', $this->estadoBilhete);
        $stmt->bindParam(':tipoBilhete', $this->tipoBilhete);
        $stmt->bindParam(':idUsuario', $this->idUsuario); 
        $stmt->bindParam(':idSessao', $this->idSessao);  
        $stmt->bindParam(':idCliente', $this->idCliente);
        $stmt->bindParam(':fpagamento', $this->fpagamento);
        return $stmt->execute();
    }

       public function update() {
        $sql="update $this->table set numeroBilhete:numeroBilhete,horaCompra:horaCompra,tipoBilhete:tipoBilhete,estadoBilhete:estadoBilhete,idSessao:idSessao,idCliente:idCliente,idBilhete:idBilhete,fpagamento:fpagamento";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':numeroBilhete', $this->numeroBilhete);
        $stmt->bindParam(':horaCompra', $this->horaCompra);
        $stmt->bindParam(':tipoBilhete', $this->tipoBilhete);
        $stmt->bindParam(':estadoBilhete', $this->estadoBilhete);
        $stmt->bindParam(':idSessao', $this->idSessao);  
        $stmt->bindParam(':idCliente', $this->idCliente);
        $stmt->bindParam(':idBilhete', $this->idBilhete);
        $stmt->bindParam(':fpagamento', $this->fpagamento);
        return $stmt->execute();
    }
}