<?php

	session_start();
	require_once('handler_database.php');
	require_once('sanitize.php');

	$titel = $auteur = $image = $images = $review = '';

	// Geen bevoegdheid
	if(!verifyLevel(2)) {

		header('Location: /main.php?pagina=error&error=nietingelogd');
		die();

	// Bevoegdheid
	} else {

		// Form input dmv inzending form?
		if(isset($_POST['submit'])) {

			// Variabelen sanitizen en lokaliseren
			$titel 		= testData($_POST['titel']);
			$auteur		= testData($_POST['auteur']);
			$review 	= testData($_POST['review']);
			$images		= verifyImage('fileToUpload');

			// Query prepareren en data binden
			$query 		= $connection->prepare('INSERT INTO boeken (titel,auteur,review,image) 
												VALUES (:titel,:auteur,:review,:image)');
			$query->bindValue(':titel', $titel);
			$query->bindValue(':auteur', $auteur);
			$query->bindValue(':review', $review);

			// Nieuw plaatje handler
			$image 		= implode('%',$images);
			$query->bindValue(':image', $image);

			$query->execute();

			header('Location: /main.php?pagina=boekreviews');
			die();

		}

	}

?>