<hr>
<?php
 	$id=$_SESSION['loginId'];
    $pdo = Conexao::getInstance();
    $sql="SELECT nome FROM usuarios WHERE id = '$id';"; 
    $consulta = $pdo->query($sql);
    $linha = $consulta->fetch(PDO::FETCH_BOTH);
    $Unome=$linha['nome'];
?>
<center>O que você acha de tentar fazer essas coisas hoje <?php echo $Unome; ?>?</center>
<?php 
	include_once "php/funcionalidades/funcionalidades-develop.php";
?>