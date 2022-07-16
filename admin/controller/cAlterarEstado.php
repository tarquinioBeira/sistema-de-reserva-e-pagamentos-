<?php
 
$id = $_POST['id'];

require_once '../db/conexao.php';
$sql = 'UPDATE bilhete SET estado="Assistido" WHERE idBilhete='.$id;
$query = mysqli_query($mysqli, $sql);
$ver = mysqli_affected_rows($mysqli);
echo $ver;
	
?>