<?php
	session_start();
	if (isset($_POST['nome']) & isset($_POST['senha']) & isset($_POST['email']) & isset($_POST['senha2'])) {
		if($_POST['nome']!="" & $_POST['senha']!="" & $_POST['email']!="" & $_POST['senha2']!=""){
			if ($_POST['senha'] == $_POST['senha2']) {
				include_once "../config/default.inc.php";
				require_once "../config/Conexao.php";
				$senha= md5($_POST['senha']);
				$email=$_POST['email'];
				$nome= $_POST['nome'];
				$pdo = Conexao::getInstance();
	            $sql="SELECT count(*) FROM usuarios WHERE nome='$nome';"; 
	            $consulta = $pdo->query($sql);
	        	$resposta = $consulta->fetch(PDO::FETCH_BOTH);	
	        	if (!($resposta['count(*)']==1)) {
	        		$sql="INSERT INTO USUARIOS VALUES (NULL,?,?,?)"; 
    				$stmt = $pdo->prepare($sql);
      				$stmt->bindValue(1,$nome);
    				$stmt->bindValue(2,$email);
    				$stmt->bindValue(3,$senha);
					$stmt->execute();
	            	$sql="SELECT id FROM usuarios WHERE nome='$nome';"; 
	            	$consulta = $pdo->query($sql);
	        		$resposta = $consulta->fetch(PDO::FETCH_BOTH);	
	        		if ($resposta['id']!="") {
	        			$_SESSION['login']=true;
	        			$_SESSION['loginId']=$resposta['id'];
        				$_SESSION['saudacao']=false;
        				mkdir("./testArea/".$resposta["id"]);
        				mkdir("../pseudodatabase/documentos/".$resposta["id"]);
	        			header("Location: ../index.php");
	        		}
	        	}else{
					$_SESSION['msg']="Este nome já está sendo utilizado";
					header("Location: ../cadastrar.php");
	        	}
			}else{
				$_SESSION['msg']="Senhas não compativeis";
				header("Location: ../cadastrar.php");
			}
		}else{
			$_SESSION['msg']="Campos não preenchidos";
			header("Location: ../cadastrar.php");
		}
	}else{
		header("Location: ../index.php");
	}
?>