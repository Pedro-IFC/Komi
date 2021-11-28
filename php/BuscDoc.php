<?php
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
    }
    $id=$_SESSION['loginId'];
    $dir = dir("../pseudodatabase/documentos/".$id."/");
    while ($arquivo=$dir->read()) {
    	if ($arquivo!="." && $arquivo!="..") {
    		echo '<a target="_blank" href="../pseudodatabase/documentos/'.$id.'/'.$arquivo.'">'.$arquivo.'</a>&nbsp&nbsp&nbsp&nbsp';
            echo '<a href="excluirDoc.php?doc='.$id."/".$arquivo.'" class="btn-small red"> <i class="material-icons small">delete</i></a><br>';
    	}
    }
    $dir->close();
?>