<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location: login.php");
	}
    include_once "config/default.inc.php";
    require_once "config/Conexao.php";
    include_once "php/msg.php";
?>
<html>
<head>
	<link rel="icon" type="image/png" href="midiadocs/favicon/1.png">
	<title>Komi-chan</title>
	<meta charset="utf-8">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="designdocs/materialize/css/materialize.css">
	<!-- Compiled and minified Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="designdocs/materialize/js/materialize.js"></script>     
    <!-- CSS Pessoal-->
    <link rel="stylesheet" href="designdocs/estilo1.css">
    <!-- JS Pessoal-->
    <script type="text/javascript" src="js/first.js"></script>
</head>
<body>
	<br><br>
	<div class="row">
		<div class="col s2 offset-s1">
			User:{Name: "
			<?php 
				include_once 'php/name.php';
			?>	
			", id: <?php echo $id?>}
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s8">
				<?php include_once "designdocs/funcionalidades.php"; ?>
			</div>
			<div class="col s4 lateral-direita">
				<div class="row">
					<div class="col s12">
						<center>
							<h1 class="titleI">Komi-chan</h1>
							<div class="col s1 offset-s8">
								<a href="php/exit.php">Sair</a>
							</div>
						</center>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<?php include_once "designdocs/komi-face.php"?>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<h5>Clima: <span class="clima"></span></h5>
						<h5>Temperatura: <span class="temperatura"></span></h5>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<?php include_once "designdocs/functionbar.php"?>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<?php include_once "designdocs/trytoday.php"?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</body>
    <!-- JS Weather-->
    <script type="text/javascript" src="js/Weather.js"></script>
</html>