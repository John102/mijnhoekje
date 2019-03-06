<?php
	session_start();

	if(isset($_SESSION['uid'])) {
		unset($_SESSION['uid']);	
	}
	if(isset($_SESSION['tijd'])) {
		unset($_SESSION['tijd']);
	}
	if(isset($_SESSION['vlag'])) {
		unset($_SESSION['vlag']);	
	}

	session_destroy();

	header('Location: /main.php?pagina=status&status=uitgelogd');
	die();

?>