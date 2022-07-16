<?php  
require_once '../db/conexao.php';
$id = $_POST['id'];

$sql = "SELECT *FROM usuario where id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);

$nome = $linha[1];
$ultimonome = $linha[2];
$morada = $linha[9];
$numerocelular = $linha[3];
$tipodocumento = $linha[4];
$numerodoc = $linha[5];
$data = $linha[11];
$genero = $linha[12];
$email = $linha[6];
$nivelAcesso = $linha[8];

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
                     <select name="tipodocumento" class="form-control" id="tipodocumento" value="'.$tipodocumento.'">
                        <option value="none" selected="" disabled="">Tipo de Documento</option>
                        <option value="BI">Bilhete de Identidade</option>
                        <option value="NUIT">NUIT</option>
                    </select>
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
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="'.$email.'">
                </div>
           </div>
           <div class="row">
                     <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                     <label for="nivelAcesso">Nível de Acesso </label>
                     <select name="nivelAcesso" class="form-control" id="nivelAcesso" required="" value="'.$nivelAcesso.'">
                        <option value="none" selected="" disabled="">Selecione o nível</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Funcionario">Funcionário</option>
                    </select>
                </div>
            </div>
            <div id="results"></div>
            <div class="form-actions row">
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
            <input type="button" class="btn btn-primary" value="GRAVAR" onclick="editarUsuario('.$id.')">
            <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR">
            </div>
        </div>
    </form>';
    echo $form;