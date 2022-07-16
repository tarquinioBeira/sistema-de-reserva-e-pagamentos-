<?php
 require_once '../models/mVender.php';
 require_once '../models/mBilhete.php';
 require_once '../db/conexao.php';

session_start();
 $nome = $_POST['nome'];
 $apelido = $_POST['apelido'];
 $numeroTelefone = $_POST['numerocelular'];
 $tipodocumento = isset($_POST['tipodocumento']) ? $_POST['tipodocumento'] :  $tipodocumento=""; 
 $numerodoc = isset($_POST['numerodoc']) ? $_POST['numerodoc'] :  $numerodoc=""; 
 $morada = $_POST['morada'];
 $genero= $_POST['genero'];
 $idSessao = $_POST['listaSessoes'];
 $dataNascimento = isset($_POST['data']) ? $_POST['data'] :  $dataNascimento=""; 
 $fpagamento = $_POST['fpagamento']; 

 $senha1 = "12345";
 $senha = md5($senha1);
 $nomes = explode(' ', $nome);
 $primeiroNome = $nomes[0];
 $user = "$primeiroNome.$apelido";
 $user = strtolower($user);
 
 $vender= new mVender();
 $bilhete= new mBilhete();

$vender->setNome($nome);
$vender->setGenero($genero);
$vender->setNumeroTelefone($numeroTelefone);
$vender->setMorada($morada);
$vender->setApelido($apelido);
$vender->setTipoDoc($tipodocumento);
$vender->setNumeroDoc($numerodoc);
$vender->setUsuario($user);
$vender->setSenha($senha);
$vender->setFPagamento($fpagamento);
$vender->setListaSessoes($idSessao);
$vender->setDataNascimento($dataNascimento);

$result=$vender->insert();

	if($result >=1){
		$idUsuario = $_SESSION['idUsuario'];
		$sql = "SELECT *FROM cliente ORDER BY idCliente DESC LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);
		$idCliente = $linha[0];

		$numBilhete = strtoupper(uniqid('',false));

	    $sql = 'INSERT INTO bilhete(numero,estado,tipo,idUsuario,idSessao,idCliente,fpagamento) VALUES ("'.$numBilhete.'","Assistido","Vendido",'.$idUsuario.','.$idSessao.','.$idCliente.',"'.$fpagamento.'")';
		$query = mysqli_query($mysqli, $sql);
		$result = mysqli_affected_rows($mysqli);
		$_SESSION["imprimir"] = "sim";
		echo $result;
		}
	    else{
		echo $result;
	    }
	
