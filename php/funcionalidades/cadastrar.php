<?php
	if (isset($_POST['select']) and isset($_POST['titulo'])) {
 	   	include_once "../../config/default.inc.php";
    	require_once "../../config/Conexao.php";
		$pdo = Conexao::getInstance();
        $sql="INSERT INTO funcionalidades VALUES(NULL, ?, ? ,?);"; 
        $stmt=$pdo->prepare($sql);
        $stmt->bindValue(1,$_POST['titulo']);
        $stmt->bindValue(2,date("Y/m/d"));
        $stmt->bindValue(3,$_POST['select']);
        $stmt->execute();
        header("Location: index.php");
	}else{
		header("Location: index.php");
	}
?>