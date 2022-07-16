	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.png">		
		<!-- Author Meta -->
		<meta name="author" content="Cucorreia Gabriel">
		<!-- Meta Description -->
		<meta name="description" content="Sistema de venda de bilhetes Online">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Página Inicial | Cine Aniz</title>
		<style type="text/css">
			b{
				color: black;
				font-weight: bold;
			}
		</style>
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<?php
                require_once 'admin/db/conexao.php';
                $hoje = date("Y-m-d",strtotime("today"));
                $sql = 'SELECT filme.tituloFilme,filme.autor,filme.descricao,filme.anoLancamento,filme.duracao,filme.cartazFilme,sessao.data,sessao.horaInicio,sala.nomeSala,sessao.preco,sessao.id FROM sessao INNER JOIN filme ON sessao.idFilme=filme.id INNER JOIN sala ON sessao.idSala=sala.id WHERE sessao.data >="'.$hoje.'" ORDER BY sessao.id DESC';
                $resultado = mysqli_query($mysqli,$sql);
                $linha = mysqli_fetch_row($resultado);
                $num = mysqli_affected_rows($mysqli);

        ?>
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="admin/img/logo/logo.png" alt="" title="" height="50"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php" style="color: #BE1522;">Página Inicial</a></li>
			          <li><a href="services.php" style="color: #BE1522;">Serviços</a></li>
			          <li><a href="portfolio.php" style="color: #BE1522;">Galeria</a></li>	
			          <li><a href="about.php" style="color: #BE1522;">Sobre Nós</a></li>	      	           
			          <li><a href="contact.php" style="color: #BE1522;">Contacto</a></li>
			          <li><a href="admin" style="color: #BE1522;">Login</a></li>	
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			<!-- start banner Area -->
			
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<!-- <h6>This is me</h6> -->
							<h1><?php echo $linha[0];?></h1>
							<p>
								<div><?php echo $linha[2];?></div>
							</p>
							<button class="primary-btn text-uppercase" onclick="comprarBilhete(<?php echo $linha[10];?>)">FAZER RESERVA OU PAGAMENTO</button>
							
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="admin/uploads/<?php echo $linha[5];?>" alt="">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->		
						<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap" style="padding-top: 30px;">
		        <div class="container">
		            <div class="row d-flex justify-content-center" >
		                <div class="menu-content pb-70 col-lg-8" style="padding-bottom: 5px;">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Sessões</h1>
		                        <p>Confira a seguir, a programação dos melhores filmes que somente o Cine Aniz oferece. São apresentados filmes de vários gêneros, por exemplo: de comédia, acção, animação, aventura, drama, suspense, ficção científica, comédia de acção, religioso, entre outros.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                	<?php if($num >=1){
								do{?>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="desc">
		                            <div class="thumb">
										<img class="f-img img-fluid mx-auto" src="admin/uploads/<?php echo $linha[5];?>" alt="">	
									</div><br>
		                            <h4><?php echo $linha[0];?></h4>
		                            <div>
										<b style="color: #777777;font-weight: bold;">Autor:</b> <?php echo $linha[1];?>
									</div>
		                            <div>
		                        <b style="color: #777777;font-weight: bold;">Data:</b> <?php echo date("d-m-Y",strtotime($linha[6]));?>
									&nbsp;&nbsp;<b style="color: #777777;font-weight: bold;">Hora de Início:</b> <?php echo $linha[7];?>
									&nbsp;&nbsp;<b style="color: #777777;font-weight: bold;">Duração:</b> <?php echo $linha[4];?></div>
									<div><b style="color: #777777;font-weight: bold;">Local:</b> Paraiso Misterioso -<?php echo $linha[8];?>&nbsp;&nbsp;
									<b style="color: #777777;font-weight: bold;">Preço:</b> <?php echo $linha[9];?>,00MT</div><br>
									<div class="text-uppercase" style="color:#BE1522;color: #777777;font-weight: bold;">Descrição</div>
									<div><?php echo $linha[2];?></div>
									<button class="primary-btn text-uppercase" onclick="comprarBilhete(<?php echo $linha[10];?>)">COMPRAR BILHETE</button>
		                        </div>

		                    </div>
		                <?php }while($linha = mysqli_fetch_row($resultado));}?>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->						







            <!-- start footer Area -->
            <footer class="footer-area" style="background-color: #BE1522;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="single-footer-widget" style="margin-top: 20px;text-align: center;color: #FFF;">
                                <p>Copyright © <?php echo date('Y');?>. Cine Aniz. Todos os Direitos Reservados.</p>
                            </div>
                        </div>
                  
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
			<script type="text/javascript">
				function comprarBilhete(idSessao) {
					window.location = "login.php?idSessao="+ idSessao;
					//console.log(idSessao);
				}
			</script>
		</body>
	</html>