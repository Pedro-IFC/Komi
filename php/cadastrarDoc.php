<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location: ../login.php");
	}
    $id=$_SESSION['loginId'];
	if (isset($_FILES['arquivo'])&isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		$permitidos=array('pdf');
		$extensao=pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
		if(in_array($extensao , $permitidos)){
			$pasta="../pseudodatabase/documentos/".$id."/";
			$temporario=$_FILES['arquivo']['tmp_name'];
			$novoNome=$nome.$extensao[0];
			if (move_uploaded_file($temporario, $pasta.$novoNome)) {
				header('Location: ./documentos.php');	
			}
		}else{
			$_SESSION['msg']="Não é possivel cadastrar essa foto de perfil, pois o formato pode ser somente png e jpg";
			header('Location: ./documentos.php');
		}
	}
?>