<?php
require_once'../db/conexao.php';

 $id = $_POST['id'];
 $tabela = $_POST['tabela'];

     
$sql = "DELETE FROM $tabela WHERE id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$num = mysqli_affected_rows($mysqli);
echo $num;