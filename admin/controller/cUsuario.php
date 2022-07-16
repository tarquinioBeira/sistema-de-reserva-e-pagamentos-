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
 

 $senha1 = "12345";
 $senha = md5($senha1);
 $nomes = explode(' ', $nomeUsuario);
 $primeiroNome = $nomes[0];
 $user = "$primeiroNome.$apelidoUsuario";
 $user = strtolower($user);
     
 $usuario= new mUsuario();

$usuario->setNomeUsuario($nomeUsuario);
$usuario->setGenero($genero);
$usuario->setNumeroTelefone($numeroTelefone);
$usuario->setMorada($morada);
$usuario->setApelidoUsuario($apelidoUsuario);
$usuario->setTipoDoc($tipodocumento);
$usuario->setNumeroDoc($numerodoc);
$usuario->setUsuario($user);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setNivelAcesso($nivelAcesso);
$usuario->setDataNascimento($dataNascimento);
// $result =$usuario->findUser($nomeUsuario,$apelidoUsuario);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$usuario->insert();
	echo $result;
// }
	
?>