<?php
 require_once '../db/conexao.php';

 $nome = $_POST['nome'];
 $apelido = $_POST['apelido'];
 $contacto = $_POST['contacto'];
 $nmr_doc = $_POST['nmr_doc'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha2'];

 $senha2 = md5($senha);
 $user = strtolower($usuario);
 $nivelAcesso = "Cliente";

$sql = 'INSERT INTO cliente(nome,apelido,numeroTelefone,numeroDoc,usuario,senha) VALUES ("'.$nome.'","'.$apelido.'","'.$contacto.'","'.$nmr_doc.'","'.$usuario.'","'.$senha2.'")';
$query = mysqli_query($mysqli, $sql);
$result = mysqli_affected_rows($mysqli);
if ($result==1) {
		$sql = 'SELECT *FROM cliente WHERE usuario="'.$usuario.'" AND senha="'.$senha2.'"';
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);

		session_start();
		$_SESSION['nivelDeAcesso']="Cliente";
		$_SESSION['usuario'] =$nome." ".$apelido;
		$_SESSION['idCliente'] = $linha[0];
		$_SESSION['contacto_cliente'] = $contacto;
		echo 1;
}else{
 echo $result;
}
 