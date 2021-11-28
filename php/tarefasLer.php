<?php
	$arquivo = fopen("pseudodatabase/tarefas.txt", 'r');
	if ($arquivo==false) {
		$_SESSION['msg']= "Impossível abrir o arquivo";
		header("Location: index.php");
	}else{
		for ($i=1; $i < 10; $i++) { 
			$linha = fgets($arquivo);
			if ($linha!="") {
				echo $linha.'<br>';
			}
		}
		echo "<br>";
	}
	fclose($arquivo);
?>