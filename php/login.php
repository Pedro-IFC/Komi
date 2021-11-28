<?php
	session_start();
	if (isset($_POST['nome']) & isset($_POST['senha'])) {
		if($_POST['nome']!="" & $_POST['senha']!=""){
			include_once "../config/default.inc.php";
			require_once "../config/Conexao.php";
			$senha= md5($_POST['senha']);
			$nome= $_POST['nome'];
			$pdo = Conexao::getInstance();
            $sql="SELECT count(*) FROM usuarios WHERE nome='$nome' AND senha='$senha';"; 
            $consulta = $pdo->query($sql);
        	$resposta = $consulta->fetch(PDO::FETCH_BOTH);
        	if($resposta["count(*)"]>=1){
				$pdo = Conexao::getInstance();
    	        $sql="SELECT id FROM usuarios WHERE nome='$nome' AND senha='$senha';"; 
        	    $consulta = $pdo->query($sql);
        		$resposta = $consulta->fetch(PDO::FETCH_BOTH);
        		$_SESSION['login']=true;
        		$_SESSION['loginId']=$resposta[0];
        		$_SESSION['saudacao']=false;
        		header("Location: ../index.php");
        	}else{
				$_SESSION['msg']="Dados não Compatíveis ";
				header("Location: ../login.php");
        	}
		}else{
			$_SESSION['msg']="Campos não preenchidos";
			header("Location: ../login.php");
		}
	}else{
		header("Location: ../index.php");
	}
?>