<?php
    session_start();

    if (!isset($_SESSION['usuario']) || $_SESSION['nivelDeAcesso'] !="Administrador") {
        session_destroy();
        header('location:../index.php');  
    }
    ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cine Aniz - Página Inicial</title>
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
                <a href="painelAdmin.php"><img class="main-logo" src="img/logo/logo.png" alt=""/></a>
                <strong><a href="painelAdmin.php"><img src="img/logo/logosn.png" alt=""/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                	<!-- <br> -->
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
                                            <a  href="painelAdmin.php">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <?php
                require_once 'db/conexao.php';
                $sql = "SELECT *FROM usuario";
                $resultado = mysqli_query($mysqli,$sql);
                $linha = mysqli_fetch_row($resultado);
                $num = mysqli_affected_rows($mysqli);

        ?>
                    <?php
                require_once 'db/conexao.php';
                $sql = "SELECT *FROM filme";
                $resultado = mysqli_query($mysqli,$sql);
                $linha = mysqli_fetch_row($resultado);
                $num1 = mysqli_affected_rows($mysqli);

        ?>
                    <?php
                require_once 'db/conexao.php';
                $sql = "SELECT *FROM sessao";
                $resultado = mysqli_query($mysqli,$sql);
                $linha = mysqli_fetch_row($resultado);
                $num2 = mysqli_affected_rows($mysqli);

        ?>
                    <?php
                require_once 'db/conexao.php';
                $sql = "SELECT *FROM bilhete";
                $resultado = mysqli_query($mysqli,$sql);
                $linha = mysqli_fetch_row($resultado);
                $num3 = mysqli_affected_rows($mysqli);

        ?>
        <!-- Eh aqui onde o mambo acontece-->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Usuários</h5>
                                <h2><span class="counter"><?php echo $num;?></span> <span class="tuition-fees"></span></h2>
                                <span class="text-success"><?php echo $num;?></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num;?>%;"> <span class="sr-only"><?php echo $num;?>Usuário (s)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Filmes</h5>
                                <h2><span class="counter"><?php echo $num1;?></span> <span class="tuition-fees"></span></h2>
                                <span class="text-success"><?php echo $num1;?></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num1;?>%;"> <span class="sr-only"><?php echo $num1;?>Filme (s)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Sessões</h5>
                                <h2><span class="counter"><?php echo $num2;?></span> <span class="tuition-fees"></span></h2>
                                <span class="text-success"><?php echo $num2;?></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num2;?>%;"> <span class="sr-only"><?php echo $num2;?>Sessão (ões)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Bilhetes</h5>
                                <h2><span class="counter"><?php echo $num3;?></span> <span class="tuition-fees"></span></h2>
                                <span class="text-inverse"><?php echo $num3;?></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num3;?>%;"> <span class="sr-only"><?php echo $num3;?>Bilhete (s)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>University Earnings</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp graph-rp-dl">
                                            <p>All Earnings are in million $</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #006DF0;"></i>CSE</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Accounting</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Electrical</h5>
                                </li>
                            </ul>
                            <div id="morris-bar-chart" style="height: 356px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter">1500</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Page Views</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple"><span class="counter">3000</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info"><span class="counter">5000</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger"><span class="counter">18</span>%</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
              <br><br><br><br><br>
        <!-- Eh aqui onde termina o mambo -->
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
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
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