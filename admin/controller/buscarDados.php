 <?php  
 require_once '../db/conexao.php';
 $id = $_POST['id'];

$sql = "SELECT *FROM sala where id=".$id;
$resultado = mysqli_query($mysqli,$sql);
$linha = mysqli_fetch_row($resultado);
$nome = $linha[1];
$capacidade = $linha[2];
 $form ='
    <form method="POST">
        <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="nome">Nome da Sala</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome da Sala" id="nome" required="" value="'.$nome.'">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="capacidade">Capacidade</label>
                <input name="capacidade" type="text" class="form-control" placeholder="capacidade" id="capacidade" required="" value="'.$capacidade.'">
            </div>
          </div>
           <div id="results"></div>
            <div class="form-actions row">
            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
            <input type="button" class="btn btn-primary" value="GRAVAR" onclick="editarSala('.$id.')">
            <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR">
        </div>
    </div>
    </form>';
    echo $form;