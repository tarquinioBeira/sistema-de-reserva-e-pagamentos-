<?php
 require_once '../models/mCliente.php';

 $nome = $_POST['nome'];
 $apelido = $_POST['apelido'];
 $numeroTelefone = $_POST['numerocelular'];
 $tipodocumento = isset($_POST['tipodocumento']) ? $_POST['tipodocumento'] :  $tipodocumento=""; 
 $numerodoc = isset($_POST['numerodoc']) ? $_POST['numerodoc'] :  $numerodoc=""; 
 $morada = $_POST['morada'];
 $genero= $_POST['genero'];
 $sessao = $_POST['sessao'];
 $dataNascimento = isset($_POST['data']) ? $_POST['data'] :  $dataNascimento=""; 
 $senha = isset($_POST['senha'];
 $usuario = $_POST['usuario'];

 $cliente= new mCliente();

$cliente->setUsuario($nome;
$cliente->setGenero($genero);
$cliente->setNumeroTelefone($numeroTelefone);
$cliente->setMorada($morada);
$cliente->setApelido($apelido);
$cliente->setTipoDoc($tipodocumento);
$cliente->setNumeroDoc($numerodoc);
$cliente->setSenha($senha);
$cliente->setSessao($sessao);
$cliente->setUsuario($usuario)
$cliente->setDataNascimento($dataNascimento);
// $result =$usuario->findUser($nomeUsuario,$apelidoUsuario);
// if($result >=1){
//  echo "100";
// }else{
    $result=$cliente->insert();
    echo $result;
// }
    
?>