<?php

require_once '../action/aUsuario.php';

class mUsuario extends aUsuario{
 
    protected $table='usuario';
    
        private $idUsuario;
        private $nomeUsuario;
        private $apelidoUsusario;
        private $numeroTelefone;
        private $morada;
        private $genero;
        private $nivelAcesso;
        private $usuario;
        private $senha;
        private $email;
        private $tipoDoc;
        private $numeroDoc;
        private $dataNascimento;

        function getIdUsuario() {
            return $this->idUsuario;
        }

        function getNomeUsuario() {
            return $this->nomeUsuario;
        }

        function getNumeroDoc() {
            return $this->numeroDoc;
        }

        function getTipoDoc() {
            return $this->tipoDoc;
        }

        function getApelidoUsuario() {
            return $this->apelidoUsusario;
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

         function getEmail() {
            return $this->email;
        }

        function getDataNascimento() {
            return $this->dataNascimento;
        }

        function getNivelAcesso() {
            return $this->nivelAcesso;
        }

        function getSenha() {
            return $this->senha;
        }

        function setNomeUsuario($nomeUsuario) {
            $this->nomeUsuario = $nomeUsuario;
        }

        function setApelidoUsuario($apelidoUsusario) {
            $this->apelidoUsusario = $apelidoUsusario;
        }

        function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
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

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        function setNivelAcesso($nivelAcesso) {
            $this->nivelAcesso = $nivelAcesso;
        }
        function setSenha($senha) {
            $this->senha = $senha;
        }

        function setTipoDoc($tipoDoc) {
            $this->tipoDoc = $tipoDoc;
        }
        function setNumeroDoc($numeroDoc) {
            $this->numeroDoc = $numeroDoc;
        }
                
    public function insert() {
        $sql="insert into $this->table(nomeUsuario,apelidoUsuario,numeroTelefone,tipoDoc,numeroDoc,email,senha,nivelAcesso,morada,usuario,dataNascimento,genero) values (:nomeUsuario,:apelidoUsuario,:numeroTelefone,:tipoDoc,:numeroDoc,:email,:senha,:nivelAcesso,:morada,:usuario,:dataNascimento,:genero)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nomeUsuario', $this->nomeUsuario);
        $stmt->bindParam(':apelidoUsuario', $this->apelidoUsusario);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':tipoDoc', $this->tipoDoc);
        $stmt->bindParam(':numeroDoc', $this->numeroDoc);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':nivelAcesso', $this->nivelAcesso);
        $stmt->bindParam(':morada', $this->morada);
        $stmt->bindParam(':usuario', $this->usuario);
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':genero', $this->genero);  
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set nomeUsuario=:nomeUsuario,apelidoUsuario=:apelidoUsusario,numeroTelefone=:numeroTelefone,morada=:morada,email=:email,dataNascimento=:dataNascimento,nivelAcesso=:nivelAcesso where id=:idUsuario"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nomeUsuario', $this->nomeUsuario);
        $stmt->bindParam(':apelidoUsusario', $this->apelidoUsusario);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':morada', $this->morada);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':nivelAcesso', $this->nivelAcesso);
        $stmt->bindParam(':idUsuario', $this->idUsuario);     
        return $stmt->execute();
    }
}