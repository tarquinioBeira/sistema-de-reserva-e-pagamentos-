<?php
 require_once '../db/conexao.php';

 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

 $senha2 = md5($senha);
 $user = strtolower($usuario);

$sql = "SELECT *FROM usuario WHERE senha='$senha2' AND usuario='$user'";
$query = mysqli_query($mysqli, $sql);
$linha = mysqli_fetch_row($query);
$result = mysqli_affected_rows($mysqli);
if ($result==1) {
     	session_start();
     	$_SESSION['nivelDeAcesso']=$linha[8];
     	$_SESSION['usuario'] =$linha[1]." ".$linha[2];
          $_SESSION['idUsuario'] = $linha[0];
     	$_SESSION['estado'] = "";
     	echo 1;
 }else{
 	$sql = "SELECT *FROM cliente WHERE senha='$senha2' AND usuario='$user'";
	$query = mysqli_query($mysqli, $sql);
	$linha = mysqli_fetch_row($query);
	$result = mysqli_affected_rows($mysqli);
	if($result == 1){
		session_start();
     	$_SESSION['nivelDeAcesso'] = "Cliente";
     	$_SESSION['usuario'] =$linha[1]." ".$linha[2];
     	$_SESSION['estado'] = "";
          $_SESSION['idCliente'] = $linha[0];
     	echo 1;
	}else{
		echo $result;
	}
 }     
