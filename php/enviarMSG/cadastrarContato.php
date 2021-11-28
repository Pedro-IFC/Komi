<?php
  session_start();
	if (isset($_POST['num']) and isset($_POST['nome'])) {
	   	include_once "../../config/default.inc.php";
   		require_once "../../config/Conexao.php";
      $id=$_SESSION['loginId'];
   		$pdo = Conexao::getInstance();
    	$sql="INSERT INTO CONTATOS VALUES (NULL,?,?,?)"; 
    	$stmt = $pdo->prepare($sql);
      $stmt->bindValue(1,$id);
    	$stmt->bindValue(2,$_POST['num']);
    	$stmt->bindValue(3,$_POST['nome']);
    	$stmt->execute();
		header("Location: form.php");
	}else{
		header("Location: form.php");
	}
?>