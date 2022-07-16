<?php  
require_once '../db/conexao.php';
$id = $_POST['id'];

$sql = "SELECT sessao.data,sessao.horaInicio,sessao.horaFim,sessao.preco,sala.nomeSala,filme.tituloFilme FROM sessao INNER JOIN filme ON sessao.idFilme=filme.id INNER JOIN sala ON sessao.idSala=sala.id where sessao.id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);

$tituloFilme = $linha[5];
$data = $linha[0];
$horainicio = $linha[1];
$horatermino = $linha[2];
$sala = $linha[4];
$preco = $linha[3];

$sql="SELECT *from sala";
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
 
//para todas as linhas da tabela
$option="";
do{
    
    $option.= "<option value ='".$linha[0]."'>".$linha[1]."</option>";

}while($linha = mysqli_fetch_row($resultado));

 $form ='
        <form method="POST" id="frmEditar">
            <div class="row">
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <label for="filme">Filme</label>
             <input name="filme" type="text" class="form-control" id="filme" required="" value="'.$tituloFilme.'" disabled>
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="data">Data</label>
                    <input name="data" type="date" class="form-control" id="data" required="" value="'.$data.'">
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="horainicio">Hora de Início</label>
                    <input name="horainicio" type="time" class="form-control" id="horainicio" required="" value="'.$horainicio.'">
            </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-4 col-md-6   col-sm-6 col-xs-12">
                    <label for="horatermino">Hora de Término</label>
                    <input name="horatermino" type="time" class="form-control" id="horatermino" required="" value="'.$horatermino.'">
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="sala">Sala</label>
                     <select name="sala" class="form-control" id="sala" required="">
                            <option selected="">--Selecione a sala--</option>
                            '.$option.'
                    </select>
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="preco">Preço</label>
                    <input name="preco" type="text" class="form-control" id="preco" required="" value="'.$preco.'">
                 </div>
            </div>
                <div id="results"></div>
                  <div class="form-actions row">
                  <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                        <input type="button" class="btn btn-primary" value="GRAVAR" onclick="editarSessao('.$id.')">
                        <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR">
                </div>
            </div>
    </form>';
    echo $form;