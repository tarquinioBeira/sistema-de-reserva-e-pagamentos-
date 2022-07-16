<?php
 require_once '../models/mSala.php';

 $nomeSala = $_POST['nomeSala'];
 $capacidade = $_POST['capacidade'];

     
 $sala= new mSala();

$sala->setNomeSala($nomeSala);
$sala->setCapacidade($capacidade);
$result=$sala->insert();
echo $result;	
?>