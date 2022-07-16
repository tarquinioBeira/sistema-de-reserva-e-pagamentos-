<?php
require_once '../db/conexao.php';
$sql = "SELECT sessao.id,filme.tituloFilme,sessao.data,sessao.horaInicio,sessao.horaFim,sala.nomeSala,sessao.preco FROM sessao INNER JOIN filme ON sessao.idFilme=filme.id INNER JOIN sala ON sessao.idSala=sala.id";
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
        <td><?php echo $linha[3]?></td>
        <td><?php echo $linha[4]?></td>
        <td><?php echo $linha[5]?></td>
        <td><?php echo $linha[6]?></td>
        <td>
    <button class="action print btn btn-outline-success" onclick="editarSessao(<?php echo $linha[0];?>)"><i class="fa fa-edit" style="color: green"></i></button>
    <button class="action print btn btn-outline-success" onclick="apagarSessao(<?php echo $linha[0];?>)"><i class="fa fa-trash" style="color: red"></i></button>
</td>
</tr>
<?php  $qtd++; }while($linha = mysqli_fetch_row($resultado));}?>