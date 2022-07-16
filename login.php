<?php
    $idSessao = $_GET['idSessao'];
    session_start();
    $_SESSION['idSessao'] = $idSessao;
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Cine Aniz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/owl.carousel.css">
    <link rel="stylesheet" href="admin/css/owl.theme.css">
    <link rel="stylesheet" href="admin/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="admin/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="admin/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="admin/css/sweetalert/sweetalert.css" rel="stylesheet">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				 <h3><b>CINE ANIZ - LOGIN</b></h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" id="login-form">
                            <div class="form-group">
                                <label class="control-label" for="username">Nome de Usuário</label>
                                <input type="text" placeholder="" title="Por favor, insira o nome do usuário " name="username" id="username" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label" for="password">Palavra Passe</label>
                                <input type="password" title="Por favor, digite a sua senha" placeholder=""  name="password" id="password" class="form-control">
                            </div>
                            <div id="resultLogin"></div>
                            <div class="text-center">
                                <input type="button" class="btn btn-success loginbtn" onclick="entrar()" value="Entrar">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" id="btn-registar" onclick="abrirForm()" value="Registar" class="btn btn-default">
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © <?php echo date('Y');?>. Cine Aniz. Todos os Direitos Reservados.</p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function entrar(){
            $.ajax(
             {
             url:'admin/controller/cLogin.php',
             type:'POST',
             data: {
                    'senha': $("#password").val(),
                    'usuario': $("#username").val()
             },
               success: function( result) {
                if(result==1){
                    location.href='admin/controller/entrarNoSistema.php'
                }else{
                    document.getElementById('resultLogin').innerHTML ="<h5 style='color:red;'>Usuário ou senha inválidos</h5>" ;
                }
        },
            error:function (){
                    // alert("Ocorreu um erro ao submeter os dados");
                    swal("Ocorreu um erro ao submeter os dados","", "error");
                    }

             });
        }

        function registar(){

            if($("#nome").val()=="" || $("#apelido").val()=="" || $("#contacto").val()=="" || $("#nmr_doc").val()=="" || $("#senha2").val()=="" || $("#user").val()==""){
                swal("Por favor, preencha todos campos","", "error");
            }else if (($("#senha2").val() != $("#senha1").val()) || ($("#senha2").val() == "" || $("#senha1").val() == "")) {
                swal("As senhas não são iguais","", "error");
            } 
            else{
            $.ajax(
            {
             url:'admin/controller/cRegistar.php',
             type:'POST',
             data: {
                    'nome': $("#nome").val(),
                    'apelido': $("#apelido").val(),
                    'contacto': $("#contacto").val(),
                    'nmr_doc': $("#nmr_doc").val(),
                    'senha2': $("#senha2").val(),
                    'usuario': $("#user").val()
             },
               success: function( result) {
                if(result==1){
                    location.href='admin/controller/entrarNoSistema.php'
                }else{
                    document.getElementById('resultLogin').innerHTML ="<h5 style='color:red;'>Ocorreu um erro ao efectuar o pré-registo.</h5>" ;;
                }
        },
            error:function (){
                    alert("Ocorreu um erro ao submeter os dados");
                    }

             });
        }
    }
        function abrirForm() {
            
            $("#login-form").html('<div class="row"><div class="form-group col-lg-6"><label for="nome">Nome</label><input type="text" class="form-control" name="nome" id="nome" required></div><div class="form-group col-lg-6"><label for="apelido">Apelido</label><input class="form-control" id="apelido" name="apelido" required></div><div class="form-group col-lg-6"><label for="contacto">Contacto</label><input class="form-control" type="text" name="contacto" id="contacto" required></div><div class="form-group col-lg-6"><label for="nmr_doc">Número documento</label><input class="form-control" id="nmr_doc" name="nmr_doc" required></div><div class="form-group col-lg-12"><label for="user">Nome do usuário</label><input class="form-control" id="user" name="user" required></div><div class="form-group col-lg-6"><label for="senha1">Senha</label><input type="password" class="form-control" name="senha1" id="senha1" required></div><div class="form-group col-lg-6"><label for="senha2">Repetir senha</label><input type="password" class="form-control" name="senha2" id="senha2" required></div></div><div id="resultLogin"></div><div class="text-center"><input type="button" class="btn btn-success loginbtn" onclick="registar()" value="Registar">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="btn-registar" onclick="fecharForm()" value="Cancelar" class="btn btn-default"></div>');
            $(".custom-login").html('<h3><b>CINE ANIZ - REGISTAR</b></h3>');
        }
        function fecharForm() {
            $("#login-form").html('<div class="form-group"><label class="control-label" for="username">Nome de Usuário</label><input type="text" placeholder="" title="Por favor, insira o nome do usuário " name="username" id="username" class="form-control"></div><div class="form-group"><label class="control-label" for="password">Palavra Passe</label><input type="password" title="Por favor, digite a sua senha" placeholder=""  name="password" id="password" class="form-control"></div><div id="resultLogin"></div><div class="text-center"><input type="button" class="btn btn-success loginbtn" onclick="entrar()" value="Entrar">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="btn-registar" onclick="abrirForm()" value="Registar" class="btn btn-default"></div>');
            $(".custom-login").html('<h3><b>CINE ANIZ - LOGIN</b></h3>');
        }

    </script>
    <script src="admin/js/sweetalert/sweetalert.min.js"></script>
    <script src="admin/js/sweetalert/sweetalert.init.js"></script>
</body>

</html>