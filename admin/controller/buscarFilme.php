<?php
require_once '../db/conexao.php';
$sql = "SELECT *FROM filme";
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
$num = mysqli_affected_rows($mysqli);

if($num >=1){
    $qtd =1;
    do{?>
    <tr>
    <td></td>
    <td><?php echo $qtd?></td>
    <td><?php echo $linha[1]?></td>
    <td><?php echo $linha[2]?></td>
    <td><?php echo $linha[4]?></td>
    <td><?php echo $linha[5]?></td>
    <td><?php echo $linha[6]?></td>
    <td><?php echo $linha[3]?></td>
    <td>
        <button class="action print btn btn-outline-success" onclick="editarFilme(<?php echo $linha[0];?>)"><i class="fa fa-edit" style="color: green"></i></button>
        <button class="action print btn btn-outline-success" onclick="apagarFilme(<?php echo $linha[0];?>)"><i class="fa fa-trash" style="color: red"></i></button>
    </td>
    </tr>
    <?php  $qtd++; }while($linha = mysqli_fetch_row($resultado));}?>