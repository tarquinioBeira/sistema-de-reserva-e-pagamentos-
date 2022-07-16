<?php

require_once '../action/aVender.php';

class mVender extends aVender{
 
    protected $table='cliente';
    
        private $idVender;
        private $nome;
        private $apelido;
        private $numeroTelefone;
        private $genero;
        private $usuario;
        private $senha;
        private $tipoDoc;
        private $numeroDoc;
        private $dataNascimento;

        function getIdVender() {
            return $this->idVender;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumeroDoc() {
            return $this->numeroDoc;
        }

        function getTipoDoc() {
            return $this->tipoDoc;
        }

        function getApelido() {
            return $this->apelido;
        }

        function getNumeroTelefone() {
            return $this->numeroTelefone;
        }

        function getMorada() {
            return $this->morada;
        }

        function getGenero() {
            return $this->genero;
        }

         function getUsuario() {
            return $this->usuario;
        }
        function getSenha() {
            return $this->senha;
        }

        function getDataNascimento() {
            return $this->dataNascimento;
        }

        


        function setNome($nome) {
            $this->nome = $nome;
        }

        function setApelido($apelido) {
            $this->apelido = $apelido;
        }

        function setIdVender($idVender) {
            $this->idVender = $idVender;
        }

        function setNumeroTelefone($numeroTelefone) {
            $this->numeroTelefone = $numeroTelefone;
        }

        function setMorada($morada) {
            $this->morada = $morada;
        }

        function setGenero($genero) {
            $this->genero = $genero;
        }

        function setFPagamento($fpagamento) {
            $this->fpagamento = $fpagamento;
        }

        function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        function setListaSessoes($listaSessoes) {
            $this->listaSessoes = $listaSessoes;
        }

        function setTipoDoc($tipoDoc) {
            $this->tipoDoc = $tipoDoc;
        }
        function setNumeroDoc($numeroDoc) {
            $this->numeroDoc = $numeroDoc;
        }
        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }
        function setSenha($senha) {
            $this->senha = $senha;
        }
                
    public function insert() {
        $sql="insert into $this->table(nome,apelido,numeroTelefone,tipoDoc,numeroDoc,usuario,senha,dataNascimento,genero) values (:nome,:apelido,:numeroTelefone,:tipoDoc,:numeroDoc,:usuario,:senha,:dataNascimento,:genero)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':apelido', $this->apelido);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':tipoDoc', $this->tipoDoc);
        $stmt->bindParam(':numeroDoc', $this->numeroDoc);
        $stmt->bindParam(':usuario', $this->usuario);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':genero', $this->genero);  
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set nome=:nome,apelido=:apelido,numeroTelefone=:numeroTelefone,morada=:morada,fpagamento=:fpagamento,dataNascimento=:dataNascimento,listaSessoes=:listaSessoes where id=:idVender"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':apelido', $this->apelido);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':morada', $this->morada);
        $stmt->bindParam(':fpagamento', $this->fpagamento);
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':listaSessoes', $this->listaSessoes);
        $stmt->bindParam(':idVender', $this->idVender);     
        return $stmt->execute();
    }
}