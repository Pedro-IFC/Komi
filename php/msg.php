<?php
	if ($_SESSION['saudacao']==false) {
		$_SESSION['saudacao']=true;
		header('Location: php/notificator.php?cat=saudacao');
	}
	if (isset($_SESSION['msg'])) {
		$msg=$_SESSION['msg'];
		?>
			<script type="text/javascript">
				alert( "<?php echo $msg; ?>" );
			</script>
		<?php
		unset($_SESSION['msg']);
	}
?>