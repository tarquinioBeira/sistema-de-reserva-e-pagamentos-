<?php

require_once '../action/aFilme.php';

class mFilme extends aFilme{
 
    protected $table='filme';
    
        private $idFilme;
        private $tituloFilme;
        private $autor;
        private $descricao;
        private $anoLancamento;
        private $duracao;
        private $produtor;
        private $cartazFilme;

        function getIdFilme() {
            return $this->idFilme;
        }

        function getTituloFilme() {
            return $this->tituloFilme;
        }

        function getAutor() {
            return $this->autor;
        }

        function getDescricao() {
            return $this->descricao;
        }

        function getAnoLancamento() {
            return $this->anoLancamento;
        }

        function getDuracao() {
            return $this->duracao;
        }

        function getProdutor() {
            return $this->produtor;
        }

         function getCartazFilme() {
            return $this->cartazFilme;
        }

        function setTituloFilme($tituloFilme) {
            $this->tituloFilme = $tituloFilme;
        }

        function setAutor($autor) {
            $this->autor = $autor;
        }

        function setIdFilme($idFilme) {
            $this->idFilme = $idFilme;
        }

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        function setAnoLancamento($anoLancamento) {
            $this->anoLancamento = $anoLancamento;
        }

        function setDuracao($duracao) {
            $this->duracao = $duracao;
        }

        function setProdutor($produtor) {
            $this->produtor = $produtor;
        }

        function setCartazFilme($cartazFilme) {
            $this->cartazFilme = $cartazFilme;
        }
                
    public function insert() {
        $sql="insert into $this->table(tituloFilme,autor,descricao,anoLancamento,duracao,produtor,cartazFilme) values (:tituloFilme,:autor,:descricao,:anoLancamento,:duracao,:produtor,:cartazFilme)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':tituloFilme', $this->tituloFilme);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':anoLancamento', $this->anoLancamento);
        $stmt->bindParam(':duracao', $this->duracao);
        $stmt->bindParam(':produtor', $this->produtor);
        $stmt->bindParam(':cartazFilme', $this->cartazFilme);     
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set tituloFilme=:tituloFilme,autor=:autor,descricao=:descricao,anoLancamento=:anoLancamento,duracao=:duracao,produtor=:produtor,cartazFilme=:cartazFilme where id=:idFilme"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':tituloFilme', $this->tituloFilme);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':anoLancamento', $this->anoLancamento);
        $stmt->bindParam(':duracao', $this->duracao);
        $stmt->bindParam(':produtor', $this->produtor);
        $stmt->bindParam(':cartazFilme', $this->cartazFilme); 
        $stmt->bindParam(':idFilme', $this->idFilme);    
        return $stmt->execute();
    }
}