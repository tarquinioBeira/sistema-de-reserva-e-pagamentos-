 <?php 
    require '../models/mFilme.php';
    $filme = new mFilme();
    $dadosDoFilme = $filme->findAll();
    if(sizeof($dadosDoFilme)>0){
    $n=1; 
        for ($i = 0; $i < sizeof($dadosDoFilme); $i++) {?>
    <tr>
    <td></td>
    <td><?php echo $n?></td>
    <td><?php echo $dadosDoFilme[$i]->tituloFilme?></td>
    <td><?php echo $dadosDoFilme[$i]->autor?></td>
    <td><?php echo $dadosDoFilme[$i]->anoLancamento?></td>
    <td><?php echo $dadosDoFilme[$i]->duracao?></td>
    <td><?php echo $dadosDoFilme[$i]->produtor?></td>
    <td><?php echo $dadosDoFilme[$i]->descricao?></td>
    <td>
        <button class="action print btn btn-outline-success" onclick="editarFilme(<?php echo $dadosDoFilme[$i]->idFilme;?>)"><i class="fa fa-edit" style="color: green"></i></button>
        <button class="action print btn btn-outline-success" onclick="apagarFilme(<?php echo $dadosDoFilme[$i]->idFilme;?>)"><i class="fa fa-trash" style="color: red"></i></button>
    </td>
    </tr>
    <?php  $n++; }}?>