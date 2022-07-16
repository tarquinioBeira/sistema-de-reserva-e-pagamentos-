<?php
session_start();
  if($_SESSION['nivelDeAcesso']=="Administrador"){   
  	header('location:../painelAdmin.php');   
  }elseif($_SESSION['nivelDeAcesso']== 'Funcionario'){
  	header('location:../venderBilhete.php'); 
  }elseif($_SESSION['nivelDeAcesso']== 'Cliente'){
  	header('location:../../comprar_bilhete.php');
  }else{
      session_destroy();
      header('location:../../index.php'); 
  }
 