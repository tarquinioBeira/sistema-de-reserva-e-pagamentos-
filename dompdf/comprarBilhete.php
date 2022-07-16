<?php
session_start();
require_once '../admin/db/conexao.php';
require 'autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

if ($_SESSION["imprimir"] == "sim") {
	
	  	$sql = 'SELECT * FROM bilhete ORDER BY idBilhete DESC LIMIT 1';
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);
	    $data=$linha[8];
	    $idSessao=$linha[5];
	    $idCliente=$linha[6];
	    $idUsuario = $linha[4];
	    $numBilhete = $linha[1];


		$sql = 'SELECT * FROM cliente WHERE idCliente='.$idCliente;
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);
		$nomeCliente = $linha[2];

		$sql = 'SELECT * FROM usuario WHERE id='.$idUsuario;
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);
		$nomeUsuario = $linha[1]." ".$linha[2];

	  	$sql ='SELECT sessao.data,sessao.horaInicio,sessao.preco,filme.tituloFilme,sala.nomeSala,filme.produtor FROM sessao INNER JOIN filme ON sessao.idFilme=filme.id INNER JOIN sala ON sessao.idSala=sala.id WHERE sessao.id='.$idSessao;
	  	$query = mysqli_query($mysqli, $sql);
	  	$linha = mysqli_fetch_row($query);

	  	$img = "logo.png";
	  	$header ="
	  			<htm>
	  				<head>
	  					<style>
	  						.top{
	  							background-image: url('logo-small.png');
	  							width:100%;
	  							height: 30px;
	  							opacity: 0.2;
	  						}
	  						.bottom{
	  							background-image: url('logo-small.png');
	  							width: 100%;
	  							height: 30px;
	  							position: fixed;
	  							bottom: 0px;
	  							opacity: 0.2;
	  						}
	  						html{
	  							margin: 10px;
	  						}
	  						table{
	  							line-height:12px;
	  						}
	  						p{
	  							margin-top: 2px;
	  							margin-bottom: 2px;
	  						}
	  					</style>
	  				</head>
	  				<body>
	  					<div class='top' ></div>
	  						<table width='100%'>
	  						    <tr>
	  						    <td colspan='2'><p style='text-align: center; font-size:;'><b>CINE ANIZ</b></p></td>
	  						    </tr>
	  							<tr>
	  							    <td style='font-size:10; text-align:center;'>
	  								    <p>Sr(a):".$nomeCliente."</p>    
	  								</td>
	  								<td style='color:red;text-align:right; font-size:;'>N: ".$numBilhete."
	  								<br></td>
	  							</tr>
	  							<tr>
	  								<td colspan='2' style='font-size:16; text-align:center;'>
	  									<p>".strtoupper($linha[3])."</p>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td colspan='2' style='font-size:9; text-align:center;'>
	  									<p>Produzido por:&nbsp;".$linha[5]."</p>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td colspan='2' style='font-size:10; text-align:center;'>
	  									<p>".$linha[4]."-P. Misteríoso &nbsp; ".date("d-m-Y",strtotime($linha[0]))." &nbsp; ".$linha[1]."</p>	  							
	  								</td>
	  							</tr>
	  							<tr>
	  								<td colspan='2' style='font-size:10; text-align:center;'>
	  									<p>----------&nbsp;&nbsp;&nbsp;&nbsp;Preço: ".$linha[2]." Mt's&nbsp;&nbsp;&nbsp;&nbsp;----------</p>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td colspan='2' style='font-size:8; text-align:right;'>
	  									<p><i><b>Operador:</b>&nbsp;".$nomeUsuario." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".date("d-m-Y H:m:s",strtotime($data))."</i></p>
	  								</td>
	  							</tr>
	  						</table>
	  					<div class='bottom'></div>
	  				</body>";
	  
	  	$dompdf->load_html($header);
		$dompdf->setPaper('A8','landscape');
		$dompdf->render();
		$dompdf->stream("Bilhete",array('Attachment' =>0 ));
	  
	}else{
		session_destroy();
        header('location:../index.php');  
	}
	
