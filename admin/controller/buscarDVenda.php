<?php  
require_once '../db/conexao.php';
$id = $_POST['id'];

$sql = "SELECT *FROM vender where id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);

$nome = $linha[1];
$ultimonome = $linha[2];
$morada = $linha[8];
$numerocelular = $linha[3];
$tipodocumento = $linha[4];
$numerodoc = $linha[5];
$data = $linha[9];
$genero = $linha[10];
$listaSessoes = $linha[7];
$fpagamento = $linha[6];

 $form ='
        <form method="POST" id="user-form">
        <div class="row">
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <label for="nome">Nome</label>
                <input name="nome" type="text" class="form-control" id="nome" required="" value="'.$nome.'">
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <label for="ultimonome">Apelido</label>
                <input name="ultimonome" type="text" class="form-control" id="ultimonome" required="" value="'.$ultimonome.'">
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <label for="morada">Morada</label>
                <input name="morada" type="text" class="form-control" id="morada" required=""value="'.$morada.'">
            </div>
           </div>
            <div class="row">
                <div class="form-group col-lg-4 col-md-6   col-sm-6 col-xs-12">
                    <label for="numerocelular">Número de Telefone</label>
                    <input name="numerocelular" type="text" class="form-control" id="numerocelular" required=""value="'.$numerocelular.'">
                </div>
              <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                     <label for="documento">Tipo de Documento </label>
                     <input name="tipodocumento" class="form-control" id="tipodocumento" value="'.$tipodocumento.'">
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="numerodoc">Número do Documento</label>
                    <input name="numerodoc" type="text" class="form-control" id="numerodoc" value="'.$numerodoc.'">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="data">Data de Nascimento</label>
                    <input name="data" id="data" type="date" class="form-control" value="'.$data.'">
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                     <label for="genero">Género</label>
                     <input name="genero" id="genero" type="text" class="form-control" value="'.$genero.'">
                    </select>
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label for="fpagamento">Formas de Pagamento</label>
                    <input name="fpagamento" type="fpagamento" class="form-control" id="fpagamento" value="'.$fpagamento.'">
                </div>
           </div>
           <div class="row">
           <div class="row">
                     <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <label for="listaSessoes">Lista de Sessões</label>
                     <input name="listaSessoes" class="form-control" id="listaSessoes" required="" value"'.$listaSessoes.'">
                     </div>
            </div>
            <div id="results"></div>
            <div class="form-actions row">
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
            <input type="button" class="btn btn-primary" value="GRAVAR" onclick="editarVenda('.$id.')">
            <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR">
            </div>
        </div>
    </form>';
    echo $form;