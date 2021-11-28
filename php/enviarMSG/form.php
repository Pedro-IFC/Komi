<!DOCTYPE html>
<html>
<head>
	<?php
		session_start();
		if(!isset($_SESSION['login'])){
			header("Location: login.php");
		}
	?>
	<link rel="icon" type="image/png" href="../../midiadocs/favicon/1.png">
	<title>Komi-chan - Enviar msg</title>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../../designdocs/materialize/css/materialize.css">
    <!-- Compiled and minified Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="../../designdocs/materialize/js/materialize.js"></script>     
    <!-- CSS Pessoal-->
    <link rel="stylesheet" href="../../designdocs/estilo1.css">
    <!-- JS Pessoal-->
    <link rel="stylesheet" href="../../js/first.js">
</head>
<body>
	<div class="container-2">
        <div class="row">
            <div class="col s1 voltar">       
                <a class="voltar" href="../../index.php">Voltar</a>
            </div>
        </div>
		<div class="row">
			<form method="POST" action="enviarMSG.php">
				<div class="col s6">
				<center>
					<h2>Selecione o contato</h2>
				</center>
				<div class="col s3">
					<select name="select" class="browser-default">
						<?php
							session_start();
				   			include_once "../../config/default.inc.php";
				   		 	require_once "../../config/Conexao.php";
				   		 	$id=$_SESSION['loginId'];
					        $pdo = Conexao::getInstance();
				    	    $sql="SELECT numero,nome FROM CONTATOS WHERE idUsuario='$id';"; 
				        	$consulta = $pdo->query($sql);
				        	while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
				        		echo '<option value="'.$linha[0].'">'.$linha[1].'</option>';
				        	}
						?>
					</select>
				</div>
				<div class="col s6">
					<input type="text" name="msg">
				</div>	
				<div class="col s3">
					<button class="btn-margin-top btn waves-effect waves-light pink">Enviar msg</button>
				</div>	
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<form  method="POST" action="cadastrarContato.php">
					<center><h2>Preencha os campos</h2></center>
						Numero:<input type="text" name="num">
						Nome:<input type="text" name="nome">
						<button class="btn-margin-top btn waves-effect waves-light pink">Adicionar</button>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>