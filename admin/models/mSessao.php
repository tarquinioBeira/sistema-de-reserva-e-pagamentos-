<?php

require_once '../action/aSessao.php';
class mSessao extends aSessao {
    protected $table ='sessao';
    
    private $idSessao;
    private $data;
    private $horaInicio;
    private $horaFim;
    private $idFilme;
    private $idSala;
    private $preco;

    function getIdSessao() {
        return $this->idSessao;
    }

    function getData() {
        return $this->data;
    }

    function getHoraInicio() {
        return $this->horaInicio;
    }

    function getIdHoraFim() {
        return $this->horaFim;
    }

     function getIdFilme() {
        return $this->idFilme;
    }

    function getIdSala() {
        return $this->idSala;
    }

     function getPreco() {
        return $this->preco;
    }

    function setIdSessao($idSessao) {
        $this->idSessao = $idSessao;
    }

     function setData($data) {
        $this->data = $data;
    }

     function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

     function setHoraFim($horaFim) {
        $this->horaFim = $horaFim;
    }

      function setIdFilme($idFilme) {
        $this->idFilme = $idFilme;
    }

    function setIdSala($idSala) {
        $this->idSala = $idSala;
    }
     function setPreco($preco) {
        $this->preco = $preco;
    }
        public function insert() {
        $sql="insert into $this->table(data,horaInicio,horaFim,idFilme,idSala,preco) values (:data,:horaInicio,:horaFim,:idFilme,:idSala,:preco)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':data', $this->data);
        $stmt->bindParam(':horaInicio', $this->horaInicio);
        $stmt->bindParam(':horaFim', $this->horaFim);
        $stmt->bindParam(':idFilme', $this->idFilme);
        $stmt->bindParam(':idSala', $this->idSala);
        $stmt->bindParam(':preco', $this->preco);  
        return $stmt->execute();
    }

        public function update() {
        $sql="update $this->table set data=:data,horaInicio=:horaInicio,horaFim=:horaFim,idSala=:idSala,preco=:preco where id=:idSessao"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':data', $this->data);
        $stmt->bindParam(':horaInicio', $this->horaInicio);
        $stmt->bindParam(':horaFim', $this->horaFim);
        $stmt->bindParam(':idSala', $this->idSala);
        $stmt->bindParam(':preco', $this->preco);
        $stmt->bindParam(':idSessao', $this->idSessao);     
        return $stmt->execute();
    }
}
