<?php
session_start();
require_once '../admin/db/conexao.php';
require 'autoload.inc.php';

use Dompdf\Dompdf;
$dompdf = new Dompdf();

	$fpagamento = $_GET['fpagamento'];
	$idSessao = $_SESSION['idSessao'];
	$idCliente = $_SESSION['idCliente'];

if($fpagamento=="" || $idSessao=="" || $idCliente==""){
	 session_destroy();
     header('location:../');
}else{
	
	    $numBilhete = strtoupper(uniqid('',false));
	    $sql = 'INSERT INTO bilhete(numero,estado,tipo,idSessao,idCliente,fpagamento) VALUES ("'.$numBilhete.'","Nao Assistido","Reservado",'.$idSessao.','.$idCliente.',"'.$fpagamento.'")';
	    $query = mysqli_query($mysqli, $sql);
	    $nmr = mysqli_affected_rows($mysqli);

	    if ($nmr >0){
	  	$sql = 'SELECT * FROM cliente WHERE idCliente='.$idCliente;
		$query = mysqli_query($mysqli, $sql);
		$linha = mysqli_fetch_row($query);
		$nomeCliente = $linha[2];

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
	  							    <td style='font-size:10; text-align:;'>
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
	  								<td colspan='2' style='font-size:8; text-align:left;'>
	  									<p><i>Processado pelo sistema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></p>
	  								</td>
	  							</tr>
	  						</table>
	  					<div class='bottom'></div>
	  				</body>";
	  
	  	$dompdf->load_html($header);
		$dompdf->setPaper('A8','landscape');
		$dompdf->render();
		$dompdf->stream("Bilhete",array('Attachment' =>1 ));
		session_destroy();
        //header('location:../');
	  }else{
	  	echo "<script>alert('Ocorreu um erro ao comprar bilhete');</script>";
	  }
}

	
