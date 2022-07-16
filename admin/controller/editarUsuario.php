<?php
 require_once '../models/mUsuario.php';

 $nomeUsuario = $_POST['nome'];
 $apelidoUsuario = $_POST['apelido'];
 $numeroTelefone = $_POST['numerocelular'];
 $tipodocumento = isset($_POST['tipodocumento']) ? $_POST['tipodocumento'] :  $tipodocumento=""; 
 $numerodoc = isset($_POST['numerodoc']) ? $_POST['numerodoc'] :  $numerodoc=""; 
 $morada = $_POST['morada'];
 $genero= $_POST['genero'];
 $nivelAcesso = $_POST['nivelAcesso'];
 $dataNascimento = isset($_POST['data']) ? $_POST['data'] :  $dataNascimento=""; 
 $email = isset($_POST['email']) ? $_POST['email'] :  $email=""; 
$id = $_POST['id'];
     
 $usuario= new mUsuario();

$usuario->setNomeUsuario($nomeUsuario);
$usuario->setApelidoUsuario($apelidoUsuario);
$usuario->setNumeroTelefone($numeroTelefone);
$usuario->setTipoDoc($tipodocumento);
$usuario->setNumeroDoc($numerodoc);
$usuario->setMorada($morada);
$usuario->setGenero($genero);
$usuario->setNivelAcesso($nivelAcesso);
$usuario->setDataNascimento($dataNascimento);
$usuario->setEmail($email);
$usuario->setIdUsuario($id);
// $result =$usuario->findUser($nomeUsuario,$apelidoUsuario);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$usuario->update();
    echo $result;
// }
	
?>