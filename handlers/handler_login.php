<?php

	session_start();
	
	require_once('handler_database.php');
	require_once('sanitize.php');
	
	try {
		$gebruikersnaam		=	verifyFormText($_POST['gebruikersnaam']);
		$wachtwoord			=	testData($_POST['wachtwoord']);
		$query				=	$connection->prepare('SELECT gebruikersnaam, wachtwoord, vlag FROM gebruikers 
													  WHERE `gebruikersnaam` = :gebruikersnaam');
		$query->execute([':gebruikersnaam' => $gebruikersnaam]);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		// Als gebruiker bestaat
		if($row = $query->fetch()) {
			// Als wachtwoord correct is	
			if(password_verify($wachtwoord, $row['wachtwoord'])) {
				// Creëer nieuwe sessie
				if(!isset($_SESSION['uid']) && !isset($_SESSION['vlag']) ) {
				
					session_regenerate_id(true);

					$_SESSION['uid']		=	$row['gebruikersnaam'];
					$_SESSION['vlag']		=	$row['vlag'];

				}
				header('Location: /main.php?pagina=dashboard');
				die();
			// Als wachtwoord incorrect is
			} else {
				header('Location: /main.php?pagina=error&error=loginmislukt');
				die();
			}
		// Als gebruiker niet bestaat
		} else {
			header('Location: /main.php?pagina=error&error=loginmislukt');
			die();
		}
	}
	catch(PDOException $e) {
		header('Location: /main.php?pagina=error&error=loginmislukt');
		die();
	}


?>