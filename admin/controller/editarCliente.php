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
 $id = $_POST['id'];
     
 $cliente= new mCliente();

$cliente->setNome($nome);
$cliente->setApelido($apelido);
$cliente->setNumeroTelefone($numeroTelefone);
$cliente->setTipoDoc($tipodocumento);
$cliente->setNumeroDoc($numerodoc);
$cliente->setMorada($morada);
$cliente->setGenero($genero);
$cliente->setSessao($sessao);
$cliente->setDataNascimento($dataNascimento);
$cliente->setIdUsuario($id);
// $result =$usuario->findUser($nome,$apelido);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$cliente->update();
    echo $result;
// }
	
?>