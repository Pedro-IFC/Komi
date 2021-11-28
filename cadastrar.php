<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['login'])){
		header("Location: index.php");
	}
    include_once "php/msg.php";
?>
<html>
<head>
	<link rel="icon" type="image/png" href="midiadocs/favicon/1.png">
	<title>Komi-chan - Cadastrar</title>
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
    <script href="js/first.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s4 offset-s4 cadastrar-margin-top">
                <form action="php/cadastrar.php" method="POST">
                    Nome:<input type="text" name="nome">
                    E-mail:<input type="text" name="email"><br>
                    Senha:<input type="password" name="senha"> Repita a senha:<input type="password" name="senha2"><br>
                    <button type="submit" class="btn">Cadastrar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" class="btn">Logar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>