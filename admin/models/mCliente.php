<?php

require_once '../action/aCliente.php';
class mCliente extends aCliente {
    
    protected $table='cliente';
    
        private $idCliente;
        private $nome;
        private $apelido;
        private $numeroTelefone;
        private $morada;
        private $genero;
        private $listaSessoes;
        private $tipoDoc;
        private $numeroDoc;
        private $dataNascimento;
        private $usuario;
        private $senha;

        function getIdCliente() {
            return $this->idCliente;
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

        function getDataNascimento() {
            return $this->dataNascimento;
        }

        function getSessao() {
            return $this->sessao;
        }

        function getUsuario() {
            return $this->usuario;
        }
        function getSenha() {
            return $this->senha;
        }


        function setNome($nome) {
            $this->nome = $nome;
        }

        function setApelido($apelido) {
            $this->apelido = $apelido;
        }

        function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
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
        function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        function setSessao($sessao) {
            $this->sessao = $sessao;
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
        $sql="insert into $this->table(nome,apelido,numeroTelefone,tipoDoc,numeroDoc,sessao,morada,usuario,dataNascimento,genero,senha) values (:nome,:apelido,:numeroTelefone,:tipoDoc,:numeroDoc,:sessao,:morada,:usuario,:dataNascimento,:genero,:senha)";
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':apelido', $this->apelido);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':tipoDoc', $this->tipoDoc);
        $stmt->bindParam(':numeroDoc', $this->numeroDoc);
        $stmt->bindParam(':usuario', $this->usuario);
        $stmt->bindParam(':sessao', $this->sessao);
        $stmt->bindParam(':morada', $this->morada);
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':genero', $this->genero);  
        $stmt->bindParam(':senha', $this->senha);
        return $stmt->execute();
    }

    public function update() {
        $sql="update $this->table set nome=:nome,apelido=:apelido,numeroTelefone=:numeroTelefone,morada=:morada,dataNascimento=:dataNascimento,sessao=:sessao, where id=:idCliente"; 
        $stmt= DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':apelido', $this->apelido);
        $stmt->bindParam(':numeroTelefone', $this->numeroTelefone);
        $stmt->bindParam(':morada', $this->morada)
        $stmt->bindParam(':dataNascimento', $this->dataNascimento);
        $stmt->bindParam(':sessao', $this->sessao);
        $stmt->bindParam(':idCliente', $this->idCliente);     
        return $stmt->execute();
    }
}