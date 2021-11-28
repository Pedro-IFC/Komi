<?php
    include_once "../config/default.inc.php";
    require_once "../config/Conexao.php";

	if (isset($_GET['cat'])) {
		$categoria=$_GET['cat'];
        $pdo = Conexao::getInstance();
        $sql="SELECT fala FROM falas WHERE categoria = '$categoria' ORDER BY RAND() LIMIT 1"; 
        $consulta = $pdo->query($sql);
        $linha = $consulta->fetch(PDO::FETCH_BOTH);
		$fraseI=$linha[0];
        
		session_start();
        $id=$_SESSION['loginId'];
        $sql="SELECT nome FROM usuarios WHERE id = '$id';"; 
        $consulta = $pdo->query($sql);
        $linha = $consulta->fetch(PDO::FETCH_BOTH);
        $nome=$linha['nome'];

        $fraseF = str_replace('user', $nome, $fraseI);
        
        
        $_SESSION['msg']=$fraseF;

        header("Location: ../index.php");
	}
?>