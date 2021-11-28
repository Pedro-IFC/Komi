<hr>
<center>Gráfico de desenvolvimento</center>
<?php
    $pdo = Conexao::getInstance();
	$sql="SELECT COUNT(*) FROM funcionalidades;"; 
	$consulta = $pdo->query($sql);
	$total = $consulta->fetch(PDO::FETCH_BOTH);
	$totalP=12;
?>

	Total-><?php echo $total["COUNT(*)"]; ?><br>

<?php
	echo '<div class="bar-blue col s'.$totalP.'">&nbsp</div><br>';

    $sql="SELECT COUNT(*) FROM funcionalidades WHERE estado='finalizada';"; 
	$consulta = $pdo->query($sql);
	$finalizada = $consulta->fetch(PDO::FETCH_BOTH);
	$finalizadaP = floor(($finalizada["COUNT(*)"]*12)/$total["COUNT(*)"]);
?>

	Finalizados-><?php echo $finalizada["COUNT(*)"] ?><br>

<?php
	echo '<div class="bar-green col s'.$finalizadaP.'">&nbsp</div><br>';

    $sql="SELECT COUNT(*) FROM funcionalidades WHERE estado='desenvolvimento';"; 
	$consulta = $pdo->query($sql);
	$desenvolvimento = $consulta->fetch(PDO::FETCH_BOTH);
	$desenvolvimentoP = floor(($desenvolvimento["COUNT(*)"]*12)/$total["COUNT(*)"]);
?>
	
	Em desenvolvimento-><?php echo $desenvolvimento["COUNT(*)"] ?><br>

<?php
	echo '<div class="bar-orange col s'.$desenvolvimentoP.'">&nbsp</div><br>';

    $sql="SELECT COUNT(*) FROM funcionalidades WHERE estado='proposta';"; 
	$consulta = $pdo->query($sql);
	$proposta = $consulta->fetch(PDO::FETCH_BOTH);
	$propostaP = floor(($proposta["COUNT(*)"]*12)/$total["COUNT(*)"]);
?>
	
	Proposta-><?php echo $proposta["COUNT(*)"] ?><br>

<?php
	echo '<div class="bar-red col s'.$propostaP.'">&nbsp</div><br>';
?>