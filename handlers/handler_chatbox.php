<?php
	
	session_start();
	require_once('sanitize.php');

	// CHATBOX VARIABLES
	$gebruiker	=	$_SESSION['uid'];
	$bericht 	=	testData($_POST['chatbox-bericht']);
	$tijd		=	time();

	// CHATBOX LOGICS
	if(isset($bericht) && $bericht != "" || $bericht != null) {

		// DECODE JSON FILE
		$_chatboxData 	=	json_decode(file_get_contents("../logs/chatbox.json"), true);

		// PUSH INTO ARRAY
		$_chatboxNew = array(
			"gebruiker"	=> $gebruiker,
			"bericht"	=> $bericht,
			"tijd"		=> $tijd
		);

		// TOEVOEGEN AAN ARRAY
		$_chatboxData[]	= $_chatboxNew;

		// PUSH INTO JSON FILE
		file_put_contents("../logs/chatbox.json", json_encode($_chatboxData));

		// REDIRECT
		header("Location: /main.php?pagina=chatbox");
		die();

	}
?>