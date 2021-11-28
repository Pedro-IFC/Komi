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
	<title>Komi-chan - Login</title>
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
            <div class="col s4 offset-s4 login-margin-top">
                <form action="php/login.php" method="POST">
                    Nome:<input type="text" name="nome">Senha:<input type="password" name="senha"><br>
                    <button type="submit" class="btn">Logar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastrar.php" class="btn">Cadastrar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>