<?php
 require_once '../models/mFilme.php';
 session_start();
if(isset($_POST['submit'])){
 $tituloFilme = $_POST['tituloFilme'];
 $autor = $_POST['autorFilme'];
 $descricao = $_POST['descricaoFilme'];
 $anoLancamento = $_POST['anoLancamento'];
 $duracao= $_POST['duracaoFilme'];
 $produtor = $_POST['produtorFilme'];
 $file = $_FILES['file'];

 $fileName = $_FILES['file']['name'];
 	$fileTmpName = $_FILES['file']['tmp_name'];
 	$fileSize = $_FILES['file']['size'];
 	$fileError = $_FILES['file']['error'];
 	$fileType = $_FILES['file']['type'];

 	$fileExt = explode('.', $fileName);
 	$fileActualExt = strtolower(end($fileExt));

 	$allowedTypes = array("jpg","jpeg","png" );

 	if (in_array($fileActualExt, $allowedTypes)) {
 		if ($fileError === 0) {
 			if ($fileSize < 10000000) {
 				$fileNewName = uniqid('',true).".".$fileActualExt;
 				$fileDestination = '../uploads/'.$fileNewName;
 				move_uploaded_file($fileTmpName, $fileDestination);

 				 $filme= new mFilme();

				$filme->setTituloFilme($tituloFilme);
				$filme->setAutor($autor);
				$filme->setDescricao($descricao);
				$filme->setAnoLancamento($anoLancamento);
				$filme->setDuracao($duracao);
				$filme->setProdutor($produtor);
				$filme->setCartazFilme($fileNewName);
				$result=$filme->insert();
 				if($result >= 1){
 					header("Location: ../filme.php");
 					$_SESSION['estado'] = "<h3 style='color:green'>Filme adicionado com sucesso</h3>";
 				}else{
 					header("Location: ../filme.php");
 					$_SESSION['estado'] = "<h3 style='color:red'>Ocorreu um erro ao submeter os dados</h3>";
 				}
 			}else{
 				header("Location: ../filme.php");
 				$_SESSION['estado'] = "<h3 style='color:red'>O ficheiro anexado excede o limite aceite MAX 10MB</h3>";
 			}
 		}else{
 			header("Location: ../filme.php");
 			$_SESSION['estado'] = "<h3 style='color:red'>Houve um erro ao carregar o ficheiro, tente novamente</h3>";
 		}
 	}else{
 		header("Location: ../filme.php");
 		$_SESSION['estado'] = "<h3 style='color:red'>A extensão do ficheiro é inválida (jpg, jpeg e png)</h3>";
 	}	
}