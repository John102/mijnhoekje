<?php

	session_start();

	require_once('handler_database.php');
	require_once('sanitize.php');

	$gebruiker = $notitie = '';

	if(verifyLevel(2)) {
		// FRIEND TOEVOEGEN
		if(!isset($_GET['action'])) {
			try {
				$gebruiker		=		verifyFormText($_POST['gebruiker']);
				$notitie		=		testData($_POST['notitie']);
				$query			=		$connection->prepare('INSERT INTO forgefriends (gebruikersnaam,notitie) 
															  VALUES (:gebruiker,:notitie)');
				$query->bindValue(':gebruiker',$gebruiker);
				$query->bindValue(':notitie',$notitie);
				$query->execute();
				header('Location: /main.php?pagina=forgefriends#content');
				die();
			}
			catch(PDOException $e) {
				header('Location: /main.php?pagina=error&error=forgefriendserror#content');
				die();
			}
		
		} else {

			$id = $_GET['id'];

			// UPDATE LAATSTEBEZOEK
			if($_GET['action'] == 'up') {

				try {
					$query		=		$connection->prepare('UPDATE forgefriends 
															  SET bezoeken = bezoeken + 1 
															  WHERE `id` = :id');
					$query->bindValue(':id',$id);
					$query->execute();
					header('Location: /main.php?pagina=forgefriends#content');
					die();
				}
				catch(PDOException $e) {
					header('Location: /main.php?pagina=error&error=forgefriendserror#content');
					die();
				}
			}
			else if($_GET['action'] == 'down') {
				try {
					$query		=		$connection->prepare('UPDATE forgefriends 
															  SET bezoeken = bezoeken - 1 
															  WHERE `id` = :id');
					$query->bindValue(':id',$id);
					$query->execute();
					header('Location: /main.php?pagina=forgefriends#content');
					die();
				}
				catch(PDOException $e) {
					header('Location: /main.php?pagina=error&error=forgefriendserror#content');
					die();
				}
			}
			// DELETE GEBRUIKER
			else if($_GET['action'] == 'delete') {

				try {
					$query		=		$connection->prepare('DELETE FROM forgefriends 
															  WHERE `id` = :id');
					$query->bindValue(':id',$id);
					$query->execute();
					header('Location: /main.php?pagina=forgefriends#content');
					die();
				}
				catch(PDOException $e) {
					header('Location: /main.php?pagina=error&error=forgefriendserror#content');
					die();
				}
			}
			// RESET ALLEMAAL
			elseif($_GET['action'] == 'reset') {
				try {

					$query		=		$connection->prepare('UPDATE forgefriends SET `bezoeken` = 0');
					$query->execute();
					header('Location: /main.php?pagina=forgefriends#content');
					die();

				}catch(PDOException $e) {
					header('Location: /main.php?pagina=error&error=forgefriendserror#content');
					die();
				}
			}
		}
	} else {
		header('Location: /main.php?pagina=error&error=nietingelogd#content');
		die();
	}

?>