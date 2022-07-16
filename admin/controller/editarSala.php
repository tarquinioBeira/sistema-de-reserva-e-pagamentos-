<?php
 require_once '../models/mSala.php';

 $nomeSala = $_POST['nome'];
 $capacidade = $_POST['capacidade'];
 $id = $_POST['id'];
     
 $sala= new mSala();

$sala->setNomeSala($nomeSala);
$sala->setCapacidade($capacidade);
$sala->setIdSala($id);
$result=$sala->update();
echo $result;	
?>