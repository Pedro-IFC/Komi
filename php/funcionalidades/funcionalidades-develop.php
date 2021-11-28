<?php
    $pdo = Conexao::getInstance();
    $sql="SELECT titulo FROM funcionalidades WHERE estado = 'desenvolvimento' or estado = 'proposta' ORDER BY RAND() LIMIT 4;"; 
    $consulta = $pdo->query($sql);
 	while($linha = $consulta->fetch(PDO::FETCH_BOTH)){
 		echo '<span class="lista">'.$linha['titulo'].';</span><br>';
 	}
?>