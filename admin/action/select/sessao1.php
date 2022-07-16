<?php
//ligar ao servidor de BD
 require_once 'db/conexao.php';
$hoje = date("Y-m-d");
$sql="SELECT *from sessao where data >='".$hoje."' order by data DESC";
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
$danp = mysqli_affected_rows($mysqli);
 
//para todas as linhas da tabela
if ($danp >= 1) {
	
do{
	
	echo "<option value ='".$linha[0]."'>".date("d/m/Y",strtotime($linha[1]))." --> ".$linha[2]."</option>";

}while($linha = mysqli_fetch_row($resultado));}