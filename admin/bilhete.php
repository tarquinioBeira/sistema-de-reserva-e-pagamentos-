<?php
    session_start();

    if (!isset($_SESSION['usuario']) || $_SESSION['nivelDeAcesso'] !="Administrador") {
        session_destroy();
        header('location:../index.php');  
    }
    ?><!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cine Aniz - Bilhete</title>
    <meta name="description" content="Sistema de venda de bilhetes Online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
           <!-- ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
           <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="painelAdmin.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="painelAdmin.php"><img src="img/logo/logosn.png" alt=""/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                   <!--  <br> -->
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a  href="painelAdmin.php">
                                   <i class="fa fa-home"></i>&nbsp;&nbsp;
                                   <span class="mini-click-non">Página Inicial</span>
                                </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="usuario.php" aria-expanded="false">
                            <i class="fa fa-users"></i>&nbsp;&nbsp;
                            <span class="mini-click-non">Usuários</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Adicionar Usuário" href="usuario.php"><span class="mini-sub-pro">Adicionar Usuário</span></a></li>
                            </ul>
                       </li>
                       <li>
                            <a class="has-arrow" href="filme.php" aria-expanded="false">
                             <i class="fa fa-film"></i>&nbsp;&nbsp;
                             <span class="mini-click-non">Filmes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Adicionar Filme" href="filme.php"><span class="mini-sub-pro">Adicionar Filme</span></a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow" href="sessao.php" aria-expanded="false">
                            <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                            <span class="mini-click-non">Sess&otilde;es</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Adicionar Sessão" href="sessao.php"><span class="mini-sub-pro">Adicionar Sessão</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="sala.php" aria-expanded="false">
                            <i class="fa fa-university"></i>&nbsp;&nbsp;
                            <span class="mini-click-non">Salas</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="bilhete.php" aria-expanded="false">
                            <i class="fa fa-ticket"></i>&nbsp;&nbsp;
                            <span class="mini-click-non">Bilhetes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Vendidos/Reservados" href="bilhete.php"><span class="mini-sub-pro">Vendidos/Reservados</span></a></li>
                            </ul>
                        </li>
                      </ul>
                  </nav>
              </div>
           </nav>      
        </div>        
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <!--<a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="left: 50%;">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                              
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="fa fa-user-circle"></i>&nbsp;&nbsp;
                                                            <span class="admin-name"><?php echo $_SESSION['usuario'];?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                                        <i class="fa fa-cogs"></i>&nbsp;&nbsp;Minha conta</a>
                                                        </li>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Sair</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Para versão Mobile -->

                        <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li class="active">
                                            <a  href="index.php">
                                               <span class="mini-click-non">Página Inicial</span>
                                            </a>
                                       </li>
                                        <li>
                                            <a class="has-arrow" href="usuario.php" aria-expanded="false">
                                            <span class="mini-click-non">Usuários</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Adicionar Usuário" href="usuario.php"><span class="mini-sub-pro">Adicionar Usuário</span></a></li>
                                            </ul>
                                       </li>
                                        <li>
                                            <a class="has-arrow" href="filme.php" aria-expanded="false">
                                             <span class="mini-click-non">Filmes</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Adicionar Filme" href="filme.php"><span class="mini-sub-pro">Adicionar Filme</span></a></li>
                                            </ul>
                                        </li>
                                         <li>
                                            <a class="has-arrow" href="sessao.php" aria-expanded="false"> 
                                            <span class="mini-click-non">Sess&otilde;es</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Adicionar Sessão" href="sessao.php"><span class="mini-sub-pro">Adicionar Sessão</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="sala.php" aria-expanded="false">
                                            <span class="mini-click-non">Salas</span></a>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="bilhete.php" aria-expanded="false">
                                            <span class="mini-click-non">Bilhetes</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Vendidos/Reservados" href="bilhete.php"><span class="mini-sub-pro">Vendidos/Reservados</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fecho da versão Mobile -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Eh aquiiiii -->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Bilhetes</a></li>
                        </ul>
                           <div id="myTabContent" class="tab-content custom-product-edit">
                             <div class="product-tab-list tab-pane fade active in" id="description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="text-align: center;">
                        <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="id">#</th>
                                <th data-field="nome" data-editable="false">Nome do Cliente</th>
                                <th data-field="numero" data-editable="false">N. Bilhete</th>
                                <th data-field="fpagamento" data-editable="false">F. Pagamento</th>
                                <th data-field="data">Data e Horas</th>
                                <th data-field="hpreco">Preço (MT's)</th>
                                <th data-field="estado" data-editable="false">Estado</th>
                                <th data-field="horaCompra" data-editable="false">Data e Hora de Compra</th>
                                <th data-field="usuario" data-editable="false">Operador</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_bilhetee">
                            <?php
                            require_once 'db/conexao.php';
                            $sql = 'SELECT bilhete.idBilhete,cliente.nome,cliente.apelido, bilhete.numero,bilhete.estado,bilhete.fpagamento,bilhete.horaCompra,sessao.data,sessao.horaInicio, sessao.preco,bilhete.idUsuario FROM bilhete INNER JOIN cliente ON bilhete.idCliente=cliente.idCliente INNER JOIN sessao ON bilhete.idSessao=sessao.id WHERE bilhete.idBilhete=idBilhete';
                                $resultado = mysqli_query($mysqli,$sql);
                                $linha = mysqli_fetch_row($resultado);
                                $num = mysqli_affected_rows($mysqli);
                                     if($num >=1){
                                $qtd =1;
                                $usuario ="";
                                do{
                                    if($linha[10]==0){
                                        $usuario = "Sistema";
                                    }else{
                                        $sql1 = "SELECT *FROM usuario WHERE id=".$linha[10];
                                        $result = mysqli_query($mysqli,$sql1);
                                        $line = mysqli_fetch_row($result);
                                        $usuario = $line[1]." ".$line[2];
                                    }
                                    ?>
                                <tr>
                                <td></td>
                                <td><?php echo $qtd?></td>
                                <td><?php echo $linha[1]." ".$linha[2]?></td>
                                <td><?php echo $linha[3]?></td>
                                <td><?php echo $linha[5]?></td>
                                <td><?php echo date('d/m/Y',strtotime($linha[7]))." --> ".$linha[8]?></td>
                                <td><?php echo $linha[9]?></td>
                                <td><?php echo $linha[4]?></td>
                                <td><?php echo date("d/m/Y H:m:s",strtotime($linha[6]))?></td>
                                <td><?php echo $usuario;?></td>
                                </tr>
                                <?php  $qtd++; }while($linha = mysqli_fetch_row($resultado));}?>
                             </tbody>
                            </table>
                           </div>
                         </div>
                       </div>
    <div><br><br><br><br><br></div>


        <!-- Fecho da Cena Djo -->
        
        <!-- Modal CHANGE PASSWORD-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">MUDAR SENHA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form id="mudar">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="old">Senha actual</label>
                          <input type="password" class="form-control" name="old" id="old" aria-describedby="senha1Help" required="">
                          <small id="senha1Help" class="form-text text-muted">Digite a senha actual.</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="senha1">Senha</label>
                          <input type="password" class="form-control" name="senha1" id="senha1" aria-describedby="senha1Help" required="">
                          <small id="senha1Help" class="form-text text-muted">Digite a nova senha.</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="senha2">Senha</label>
                          <input type="password" class="form-control" name="senha2" id="senha2" aria-describedby="senha2Help" required="">
                          <small id="senha2Help" class="form-text text-muted">Digite a senha novamente.</small>
                        </div>
                    </div>
                  </div>
                </div>
                <div id="result"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                  <button type="button" class="btn btn-primary" onclick="mudarSenha()">GRAVAR</button>
                </div>
              </form>
              </div>
            </div>
          </div>

        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © <?php echo date('Y');?>. Cine Aniz. Todos os Direitos Reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function mudarSenha() {
            var senha1 = $('#senha1').val();
            var senha2 = $('#senha2').val();
            var old = $('#old').val();
            $('#mudar').each (function(){
              this.reset();
            });
            if ((senha1.length >=5 && senha2.length >=5) && (senha1==senha2) && old !="") {
            $.ajax({
              type: "POST",
              url: "controller/cMudarSenha.php",
              data: {
                'senha': senha2,
                'old': old
              },
              success: function(data) {
                if(data ==1){
                    alert("A sua senha foi alterada com sucesso");
                    window.location.href="logout.php";
                }else{
                    document.getElementById('result').innerHTML="<div class='alert alert-danger alert-mg-b' role='alert'><strong>Erro!</strong>A senha actual esta incorrecta.</div>";
                }
              }
            });
          }else if(senha1 !=senha2){
            document.getElementById('result').innerHTML="<div class='alert alert-danger alert-mg-b' role='alert'><strong>Erro!</strong> As senhas devem ser iguais.</div>";
          }else{
             document.getElementById('result').innerHTML="<div class='alert alert-danger alert-mg-b' role='alert'><strong>Erro!</strong> A senha deve ter no mínimo 5 letras ou dígitos.</div>";
          }
          }
    </script>
</body>

</html>