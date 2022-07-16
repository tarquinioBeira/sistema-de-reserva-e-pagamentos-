<?php  
require_once '../db/conexao.php';
$id = $_POST['id'];

$sql = "SELECT *FROM filme where id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);

$tituloFilme = $linha[1];
$autor = $linha[2];
$descricao = $linha[3];
$anoLancamento = $linha[4];
$duracao = $linha[5];
$produtor = $linha[6];
$cartazFilme = $linha[7];

 $form ='
<form method="POST" id="adicionarFilme">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <label for="tituloFilme">Título do Filme</label>
                                            <input name="tituloFilme" type="text" class="form-control" id="tituloFilme" required="" value="'.$tituloFilme.'">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <label for="autorFilme">Autor(es) do Filme</label>
                                            <input name="autorFilme" type="text" class="form-control" id="autorFilme" required="" value="'.$autor.'">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <label for="anoLancamento">Ano de Lançamento</label>
                                            <input name="anoLancamento" type="text" class="form-control" id="anoLancamento" required="" value="'.$anoLancamento.'">
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-6   col-sm-6 col-xs-12">
                                                <label for="duracaoFilme">Duração do Filme</label>
                                                <input name="duracaoFilme" type="text" class="form-control" id="duracaoFilme" required="" value="'.$duracao.'">
                                            </div>
                                                 <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                 <label for="produtorFilme">Produtor do Filme</label>
                                                 <input name="produtorFilme" type="text" class="form-control" id="produtorFilme" required="" value="'.$produtor.'">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="cartaz">Cartaz do Filme</label>
                                                <input name="cartaz" type="text" class="form-control" id="cartaz" required="" value="'.$cartazFilme.'">
                                             </div>
                                        </div>
                                        <div class="row">
                                              <div class="form-group col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                <label for="descricaoFilme">Descrição do Filme</label>
                                                <textarea name="descricaoFilme" cols="50" id="descricaoFilme">'.$descricao.'</textarea>
                                            </div>  
                                         </div>
                                        <div id="results"></div>
                                        <div class="form-actions row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <input type="button" class="btn btn-primary" value="GRAVAR" onclick="editarFilme('.$id.')">
                                        <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR" onclick="resetar()">
                                        </div>
                                    </div>
                                </form>';

echo $form;