<?php
 require_once '../models/mVender.php';

 $nome = $_POST['nome'];
 $apelido = $_POST['apelido'];
 $numeroTelefone = $_POST['numerocelular'];
 $tipodocumento = isset($_POST['tipodocumento']) ? $_POST['tipodocumento'] :  $tipodocumento=""; 
 $numerodoc = isset($_POST['numerodoc']) ? $_POST['numerodoc'] :  $numerodoc=""; 
 $morada = $_POST['morada'];
 $genero= $_POST['genero'];
 // $listaSessoes = $_POST['listaSessoes'];
 $dataNascimento = isset($_POST['data']) ? $_POST['data'] :  $dataNascimento=""; 
 $fpagamento = $_POST['fpagamento']; 
$id = $_POST['id'];
     
 $vender= new mVender();

$vender->setNome($nome);
$vender->setApelido($apelido);
$vender->setNumeroTelefone($numeroTelefone);
$vender->setTipoDoc($tipodocumento);
$vender->setNumeroDoc($numerodoc);
$vender->setMorada($morada);
$vender->setGenero($genero);
// $vender->setListaSessoes($listaSessoes);
$vender->setDataNascimento($dataNascimento);
$vender->setFPagamento($fpagamento);
$vender->setIdVender($id);
// $result =$usuario->findUser($nome,$apelido);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$vender->update();
    echo $result;
// }
	
?>