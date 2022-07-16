<?php
 require_once '../models/mVender.php';

 $nomeUsuario = $_POST['nome'];
 $apelidoUsuario = $_POST['apelido'];
 $numeroTelefone = $_POST['numerocelular'];
 $tipodocumento = isset($_POST['tipodocumento']) ? $_POST['tipodocumento'] :  $tipodocumento=""; 
 $numerodoc = isset($_POST['numerodoc']) ? $_POST['numerodoc'] :  $numerodoc=""; 
 $morada = $_POST['morada'];
 $genero= $_POST['genero'];
 $listaSessoes = $_POST['listaSessoes'];
 $dataNascimento = isset($_POST['data']) ? $_POST['data'] :  $dataNascimento=""; 
 $email = isset($_POST['email']) ? $_POST['email'] :  $email=""; 
 
 $vender= new mVender();

$vender->setNomeUsuario($nomeUsuario);
$vender->setGenero($genero);
$vender->setNumeroTelefone($numeroTelefone);
$vender->setMorada($morada);
$vender->setApelidoUsuario($apelidoUsuario);
$vender->setTipoDoc($tipodocumento);
$vender->setNumeroDoc($numerodoc);
$vender->setEmail($email);
$vender->setListaSessoes($listaSessoes);
$vender->setDataNascimento($dataNascimento);
// $result =$usuario->findUser($nomeUsuario,$apelidoUsuario);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$vender->insert();
	echo $result;
// }
	
?>