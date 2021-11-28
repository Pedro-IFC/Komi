<?php
	include_once "../config/default.inc.php";
    require_once "../config/Conexao.php";

	$pdo = Conexao::getInstance();
    $sql="SELECT fala FROM falas WHERE categoria = 'despedida' ORDER BY RAND() LIMIT 1"; 
    $consulta = $pdo->query($sql);
    $linha = $consulta->fetch(PDO::FETCH_BOTH);
	$fraseI=$linha[0];
        
	$arquivo = fopen("../user.txt", 'r');
	$nome = fgets($arquivo);
	fclose($arquivo);

    $fraseF = str_replace('user', $nome, $fraseI);
	
	?>
		<script type="text/javascript">
			alert( "<?php echo $fraseF; ?>" );
	<?php
	session_start();
	session_destroy();
	?>
		window.open("https:www.google.com", "_self");
	</script>