<?php
	if (isset($_GET['id']) && isset($_GET['estado'])) {
		$id=$_GET['id'];
		$estado=$_GET['estado'];
 	   	include_once "../../config/default.inc.php";
    	require_once "../../config/Conexao.php";
		$pdo = Conexao::getInstance();
        $sql="UPDATE funcionalidades SET estado = '$estado' WHERE id= '$id';"; 
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        header("Location: index.php");
	}else{
		header("Location: index.php");
	}
?>