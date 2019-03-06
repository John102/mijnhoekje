<?php

	session_start();

	require_once('handler_database.php');
	require_once('sanitize.php');

	if(verifyLevel(2)) {
		$titel = $nieuwsbericht = $auteur = '';

		try {
			if(isset($_POST['submit'])) {

				$titel			=	verifyFormText($_POST['titel']);
				$nieuwsbericht	=	testData($_POST['nieuwsbericht']);
				$auteur			=	$_SESSION['uid'];

				$query 			=	$connection->prepare('INSERT INTO nieuws (titel,nieuwsbericht,auteur) 
														  VALUES (:titel,:nieuwsbericht,:auteur)');
				$query->bindValue(':titel',$titel);
				$query->bindValue(':nieuwsbericht',$nieuwsbericht);
				$query->bindValue(':auteur',$auteur);
				$query->execute();
				header('Location: /main.php?pagina=nieuws#content');
				die();
			}
		} catch(PDOException $e) {
			header('Location: /main.php?pagina=error&error=nieuwspostfaal#content');
			die();
		}
	} else {
		header('Location: /main.php?pagina=error&error=nietingelogd#content');
		die();
	}

?>
