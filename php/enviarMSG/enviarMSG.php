<head>
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
	<div class="meio">
		<?php
			if (isset($_POST['select']) and $_POST['msg']) {
				$link = "https://api.whatsapp.com/send?phone=5547".$_POST['select']."&text=".$_POST['msg'];
				?>
				<a target="_blank" href="<?php echo $link; ?>">Enviar</a> | <a href="../../index.php">Voltar</a>
				<?php
			}else{
				header("Location: form.php");
			}
		?>
	</div>
</body>