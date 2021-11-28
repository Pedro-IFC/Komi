<?php
	unlink("../pseudodatabase/documentos/".$_GET['doc']);
	header("Location: documentos.php");
?>