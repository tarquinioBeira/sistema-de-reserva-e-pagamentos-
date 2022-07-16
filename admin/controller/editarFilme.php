<?php
 require_once '../models/mFilme.php';

$tituloFilme = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$anoLancamento = $_POST['anoLancamento'];
$duracao = $_POST['duracao'];
$produtor = $_POST['produtor'];
$cartazFilme = $_POST['cartaz'];
$id = $_POST['id'];

$filme= new mFilme();

$filme->setTituloFilme($tituloFilme);
$filme->setAutor($autor);
$filme->setDescricao($descricao);
$filme->setAnoLancamento($anoLancamento);
$filme->setDuracao($duracao);
$filme->setProdutor($produtor);
$filme->setCartazFilme($cartazFilme);
$filme->setIdFilme($id);
// $result =$usuario->findUser($nomeUsuario,$apelidoUsuario);
// if($result >=1){
// 	echo "100";
// }else{
	$result=$filme->update();
    echo $result;
// }
	
?>