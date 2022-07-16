<?php
//ligar ao servidor de BD
 require_once 'db/conexao.php';

$sql="SELECT *from sala";
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
 
//para todas as linhas da tabela

do{
	
	echo "<option value ='".$linha[0]."'>".$linha[1]."</option>";

}while($linha = mysqli_fetch_row($resultado));