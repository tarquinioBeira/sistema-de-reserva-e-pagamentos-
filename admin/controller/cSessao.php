<?php
 require_once '../models/mSessao.php';

 $idFilme = $_POST['filme'];
 $idSala = $_POST['sala'];
 $data = $_POST['data'];
 $horainicio = $_POST['horainicio'];
 $horaFim = $_POST['horaFim'];
 $preco = $_POST['preco'];
 
 $sessao= new mSessao();

$sessao->setData($data);
$sessao->setHoraInicio($horainicio);
$sessao->setHoraFim($horaFim);
$sessao->setPreco($preco);
$sessao->setIdSala($idSala);
$sessao->setIdFilme($idFilme);
$result=$sessao->insert();
echo $result;   
