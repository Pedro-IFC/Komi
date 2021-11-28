<?php
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
 	   	include_once "../../config/default.inc.php";
    	require_once "../../config/Conexao.php";
		$pdo = Conexao::getInstance();
        $sql="DELETE FROM funcionalidades WHERE id= '$id';"; 
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        header("Location: index.php");
	}else{
		header("Location: index.php");
	}
?>