<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location: login.php");
	}
    include_once "../config/default.inc.php";
    require_once "../config/Conexao.php";
    include_once "../php/msg.php";
?>
<html>
<head>
	<link rel="icon" type="image/png" href="../midiadocs/favicon/1.png">
	<title>Komi-chan</title>
	<meta charset="utf-8">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../designdocs/materialize/css/materialize.css">
	<!-- Compiled and minified Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="../designdocs/materialize/js/materialize.js"></script>     
    <!-- CSS Pessoal-->
    <link rel="stylesheet" href="../designdocs/estilo1.css">
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col s1 voltar">       
                <a class="voltar" href="../index.php">Voltar</a>
            </div>
        </div>
        <div class="row">
            <center>
                <h1 class="titleI">Gerenciador de Documentos</h1>
            </center><br>
        </div>
        <div class="row">
            <center>
                <h3>Cadastrar Documento</h3>
            </center>
            <div class="col s5">
                <form method="POST" action="cadastrarDoc.php" enctype="multipart/form-data">
                    <input type="file" name="arquivo"> <input type="text" name="nome">
                    <button type="submit" name="cadastrar" class="btn waves-effect waves-light pink">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <center>
                <h3 class="subtitleI">Lista de Documentos</h3>
            </center>
            <div class="col s12">
                <?php include_once 'BuscDoc.php'?>
            </div>    
        </div>
    </div>
</body>
</html>