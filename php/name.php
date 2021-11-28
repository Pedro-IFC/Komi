<?php
	$id=$_SESSION['loginId'];
	$pdo = Conexao::getInstance();
    $sql="SELECT nome FROM usuarios WHERE id='$id'"; 
    $consulta = $pdo->query($sql);
	$resposta = $consulta->fetch(PDO::FETCH_BOTH);
    echo $resposta['nome'];	
?>