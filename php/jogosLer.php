<?php
	$arquivo = fopen("pseudodatabase/jogos.txt", 'r');
	if ($arquivo==false) {
		$_SESSION['msg']="Impossível abrir o arquivo";
		header("Location: index.php");
	}else{
		while(!feof($arquivo)) { 
			$linha=fgets($arquivo);
			$link=explode(" - ", $linha)[0];
			$nome=explode(" - ", $linha)[1];
			$a='<a href="'.$link.'" target="_blank">'.$nome.'</a>';
			echo $a.'<br>';
		}
	}
	fclose($arquivo);
?>