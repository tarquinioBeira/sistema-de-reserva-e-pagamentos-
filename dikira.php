   <?php
    session_start();

    if (!isset($_SESSION['usuario']) || $_SESSION['nivelDeAcesso'] !="Funcionario") {
        session_destroy();
        header('location:../index.php');  
    }
    ?> 
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cine Aniz - Vendas</title>
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
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <link href="css/sweetalert/sweetalert.css" rel="stylesheet">
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
                <a href="venderBilhete.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="venderBilhete.php"><img src="img/logo/logosn.png" alt=""/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <br>
                         <ul class="metismenu" id="menu1">
                                <li>
                                <a class="has-arrow" href="venderBilhete.php" aria-expanded="false">
                                <i class="fa fa-ticket"></i>&nbsp;&nbsp;
                                <span class="mini-click-non">Bilheteria</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Adicionar Usuário" href="venderBilhete.php"><span class="mini-sub-pro">Vender Bilhete</span></a></li>
                                <li><a title="bilhete reservado" href="bilheteReservado.php"><span class="mini-sub-pro">Bilhetes Reservados</span></a></li>
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
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span><i class="fa fa-cogs"></i>&nbsp;&nbsp;Minha Conta</a>
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
                                            <a class="has-arrow" href="venderBilhete.php" aria-expanded="false">
                                            <span class="mini-click-non">Bilheteria</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="vender bilhete" href="venderBilhete.php"><span class="mini-sub-pro">Vender Bilhete</span></a></li>
                                                <li><a title="bilhete reservado" href="bilheteReservado.php"><span class="mini-sub-pro">Bilhetes Reservados</span></a></li>
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

        <!-- Eh aquiiiii, onde o func irá cadastrar as vendas -->

         <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Venda de Bilhetes</a></li>
                            </ul>
                               <div id="myTabContent" class="tab-content custom-product-edit">
                                 <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section" id="divEditar">
                                                    <form method="POST">
                                                        <div class="row">
                                                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="nome">Nome (*)</label>
                                                                <input name="nome" type="text" class="form-control" id="nome" required="">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="ultimonome">Apelido (*)</label>
                                                                <input name="ultimonome" type="text" class="form-control" id="ultimonome" required="">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="morada">Morada</label>
                                                                <input name="morada" type="text" class="form-control" id="morada">
                                                            </div>
                                                           </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-4 col-md-6   col-sm-6 col-xs-12">
                                                                    <label for="numerocelular">Número de Telefone (*)</label>
                                                                    <input name="numerocelular" type="text" class="form-control" id="numerocelular" required="">
                                                                </div>
                                                              <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                                                                     <label for="documento">Tipo de Documento </label>
                                                                     <select name="tipodocumento" class="form-control" id="tipodocumento">
                                                                        <option value="none" selected="" disabled="">Tipo de Documento</option>
                                                                        <option value="BI">Bilhete de Identidade</option>
                                                                        <option value="NUIT">NUIT</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                    <label for="numerodoc">Número do Documento (*)</label>
                                                                    <input name="numerodoc" type="text" class="form-control" id="numerodoc">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                    <label for="data">Data de Nascimento (*)</label>
                                                                    <input name="data" id="data" type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                                                                     <label for="genero">Género</label>
                                                                     <select name="genero" class="form-control" id="genero">
                                                                        <option value="none" selected="" disabled="">--Selecione o Genero--</option>
                                                                        <option value="M">Masculino</option>
                                                                        <option value="F">Feminino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                    <label for="fpagamento">Formas de Pagamento (*)</label>
                                                                    <select name="fpagamento" class="form-control" id="fpagamento" required="">
                                                                        <option value="none" selected="" disabled="">--Escolha a Forma--</option>
                                                                        <option value="Kesh-Directo">Kesh-Directo</option>
                                                                        <option value="pos">POS</option>
                                                                    </select>
                                                                </div>
                                                           </div>
                                                           <div class="row">
                                                                     <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                     <label for="listaSessoes">Lista de Sessões (*)</label>
                                                                     <select name="listaSessoes" class="form-control" id="listaSessoes" required="">
                                                                    <option selected="">--Selecione a Sessão--</option>
                                                                    <?php include_once 'action/select/sessao1.php'; ?>
                                                                     </select>
                                                                     </div>
                                                            </div>
                                                            <div id="results"></div>
                                                            <div class="form-actions row">
                                                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12"">
                                                            <input type="button" class="btn btn-primary" value="GRAVAR" onclick="cadastrarVenda()">
                                                            <input type="reset" class="btn btn-primary" id="btnCancelar" value="CANCELAR">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

        <!-- Tabela Vendas de Bilhetes -->
                             
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="id">#</th>
                                <th data-field="nome" data-editable="false">Nome do Cliente</th>
                                <th data-field="contacto">Contacto</th>
                                <th data-field="numero">Número de Bilhete</th>
                                <th data-field="horaInicio" data-editable="false">Hora de Início</th>
                                <th data-field="duracao" data-editable="false">Duração</th>
                                <th data-field="fpagamento" data-editable="false">Forma de Pagamento</th>
                                <th data-field="preco" data-editable="false">Preço</th>
                                <th data-field="sala">Sala</th>
                                <th data-field="accao">Accoes</th>
                            </tr>
                        </thead>
                         <tbody id="tbl_vender">
                        <?php
                        require_once 'db/conexao.php';
                        $sql = "SELECT cliente.idCliente,cliente.nome,cliente.numeroTelefone,bilhete.fPagamento,sessao.horaInicio,sessao.preco,filme.duracao,sala.nomeSala FROM bilhete INNER JOIN cliente INNER JOIN sessao INNER JOIN filme ON sessao.idFilme=filme.id INNER JOIN sala ON sessao.idSala=sala.id ";

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
                            <td><?php echo $linha[1]?></td>
                            <td><?php echo $linha[4]?></td>
                            <td><?php echo $linha[6]?></td>
                            <td><?php echo $linha[3]?></td>
                            <td><?php echo $linha[5]?></td>
                            <td><?php echo $linha[7]?></td>
                            <td>
                                <button class="action print btn btn-outline-success" onclick="buscarVenda(<?php echo $linha[0];?>)"><i class="fa fa-edit" style="color: green"></i></button>
                                <button class="action print btn btn-outline-success" onclick="apagarVenda(<?php echo $linha[0];?>)"><i class="fa fa-trash" style="color: red"></i></button>
                            </td>
                            </tr>
                            <?php  $qtd++; }while($linha = mysqli_fetch_row($resultado));}?>
                        
                            </tbody>
                            </table>
                           </div>
                         </div>
                       </div>

    <div><br><br><br><br><br></div>

    <!-- Fecho de tudo que tem haver com as vendas-->

        <div class="footer" style="margin-top: 100px">
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
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/usuario.js"></script>
    <script src="js/vender.js"></script>
    <script src="js/sweetalert/sweetalert.min.js"></script>
    <script src="js/sweetalert/sweetalert.init.js"></script>
</body>

</html>