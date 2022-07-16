<?php
require_once '../db/conexao.php';
$sql = "SELECT *FROM usuario";
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
$num = mysqli_affected_rows($mysqli);
$table ="";
    if($num >=1){
        $qtd =1;
        do{
     $table .=" <tr>
        <td></td>
        <td>".$qtd."</td>
        <td>".$linha[1]."</td>
        <td>".$linha[2]."</td>
        <td>".$linha[3]."</td>
        <td>".$linha[9]."</td>
        <td>".$linha[10]."</td>
        <td>".$linha[8]."</td>
        <td>
    <button class='action print btn btn-outline-success' onclick='buscarUsuario(".$linha[0].")'><i class='fa fa-edit' style='color: green'></i></button>
    <button class='action print btn btn-outline-success' onclick='apagarUsuario(".$linha[0].")'><i class='fa fa-trash' style='color: red'></i></button>
</td>
</tr>";
$qtd++; 
}while($linha = mysqli_fetch_row($resultado));}
echo $table;