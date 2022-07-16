<?php
 require_once '../models/mSessao.php';

$data = $_POST['data'];
$horaInicio = $_POST['horaInicio'];
$horaFim = $_POST['horaFim'];
$idSala = $_POST['sala'];
$preco = $_POST['preco'];
$id = $_POST['id'];

$sessao= new mSessao();

$sessao->setData($data);
$sessao->setHoraInicio($horaInicio);
$sessao->setHoraFim($horaFim);
$sessao->setIdSala($idSala);
$sessao->setPreco($preco);
$sessao->setIdSessao($id);

	$result=$sessao->update();
    echo $result;
	
?>