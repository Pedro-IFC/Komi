<?php
	$num=rand(1,10);
	$num2=rand(1,7);
	if ($num==10) {
		$pdo = Conexao::getInstance();
	    $sql="SELECT fala FROM falas WHERE categoria = 'animacao' ORDER BY RAND() LIMIT 1;"; 
	    $consulta = $pdo->query($sql);
	    $linha = $consulta->fetch(PDO::FETCH_BOTH);
		$src="designdocs/img/faces/".$num2.".png";
		$frase=$linha[0];
	}else{
		$src="designdocs/img/default/".$num2.".png";
		$frase="";
	}
?>
<center>
	<span class="frase"><?php echo $frase; ?></span><br>
	<img src="<?php echo $src;?> " class="responsive-img">
</center>