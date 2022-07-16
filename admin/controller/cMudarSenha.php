<?php
 require_once '../db/conexao.php';
 session_start();

 $senha = $_POST['senha'];
 $old = md5($_POST['old']);
 $senha2 = md5($senha);

 $idUsuario =$_SESSION['idUsuario'];

$sql = "SELECT * FROM usuario WHERE senha='".$old."' AND id=".$idUsuario;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
$num = mysqli_affected_rows($mysqli);

if($num <=0){
	echo 0;
}else{
	$sql="UPDATE usuario SET senha ='".$senha2."' WHERE id=".$idUsuario;
	$query = mysqli_query($mysqli, $sql);
	$result = mysqli_affected_rows($mysqli); 
	 echo $result;
}
 
