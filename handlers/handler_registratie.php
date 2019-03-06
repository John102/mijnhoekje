<?php

	require_once('handler_database.php');
	require_once('sanitize.php');

	$gebruikersnaam = $wachtwoord = $emailadres = $hashedWachtwoord = '';

	try {
	
		$gebruikersnaam		=	testData($_POST['gebruikersnaam']);
		$emailadres			=	testData($_POST['email']);
		$vlag 				=	testData($_POST['vlag']);
		$wachtwoord			=	testData($_POST['wachtwoord']);

		$options			=	['cost' => 11, ];

		$hashedWachtwoord	=	password_hash($wachtwoord, PASSWORD_BCRYPT, $options);

		$query				=	$connection->prepare('INSERT INTO gebruikers (gebruikersnaam,wachtwoord,email,vlag) 
													  VALUES (:gebruikersnaam,:wachtwoord,:email,:vlag)');
		
		$query->bindValue(':gebruikersnaam',$gebruikersnaam);
		$query->bindValue(':wachtwoord',$hashedWachtwoord);
		$query->bindValue(':email',$emailadres);
		$query->bindValue(':vlag',$vlag);

		$query->execute();

		header('Location: /main.php?pagina=status&status=geregistreerd');
		die();
	}
	catch(PDOException $e) {
		file_put_contents('RegisterErrors.txt', $e->getMessage(), FILE_APPEND);

		header('Location: /main.php?pagina=error&error=nietgeregistreerd');
		die();
	}

?>