<?php

	session_start();

	require_once('handler_database.php');
	require_once('sanitize.php');

	$titel = $categorie = $bericht = $plaatje = $plaatjes = '';

	//  Check of admin is
	if(verifyLevel(2)) {

		if(!isset($_GET['id']) && !isset($_GET['action'])) {
			// Formulier input Handlen
			$titel		=	testData($_POST['titel']);
			$categorie	=	verifyFormText($_POST['categorie']);
			$bericht	=	testData($_POST['bericht']);
			$schrijver  =	$_SESSION['uid'];
			$publiceren =	testData($_POST['publiceren']);
			$plaatjes 	=	verifyImage('fileToUpload');
			
			// POST MET PLAATJES
			if(!empty($plaatjes)) {

				$query 		=	$connection->prepare('INSERT INTO weblog (titel,categorie,bericht,schrijver,publiceren,plaatje0) 
													  VALUES (:titel,:categorie,:bericht,:schrijver,:publiceren,:plaatjes)');
				
				$query->bindValue(':titel',$titel);
				$query->bindValue(':categorie',$categorie);
				$query->bindValue(':bericht',$bericht);
				$query->bindValue(':schrijver',$schrijver);
				$query->bindValue(':publiceren', $publiceren);
				// New Plaatje handler
				$plaatjesString = implode('%',$plaatjes);
				$query->bindValue(':plaatjes', $plaatjesString);
				
				$query->execute();

			// POST ZONDER PLAATJES
			} else {
				$query		=	$connection->prepare('INSERT INTO weblog (titel,categorie,bericht,schrijver,publiceren) 
												  		  VALUES (:titel,:categorie,:bericht,:schrijver,:publiceren)');
				$query->bindValue(':titel',$titel);
				$query->bindValue(':categorie',$categorie);
				$query->bindValue(':bericht',$bericht);
				$query->bindValue(':schrijver',$schrijver);
				$query->bindValue(':publiceren', $publiceren);
				$query->execute();
			}
				
			header('Location: /main.php?pagina=weblog#content');
			die();




		} 
		elseif(isset($_GET['action']) && isset($_GET['id']) ) {
			// ID IS SET
			$id 		= $_GET['id'];
			$action 	= $_GET['action'];

			// UPDATE WEBLOG POST
			if($action == 'edit') {

				$titel 		= 	testData($_POST['titel']);
				$bericht 	= 	testData($_POST['bericht']);

				$query 		=	$connection->prepare("UPDATE weblog SET titel=:titel, bericht=:bericht WHERE `id`=:id");
				$query->bindValue(':id',$id);
				$query->bindValue(':titel',$titel);
				$query->bindValue(':bericht',$bericht);
				$query->execute();

				header('Location: /main.php?pagina=weblog#content');
				die();

				// Geen bericht aan ID
			}

			// DELETE WEBLOGPOST
			elseif($action == 'delete') {

				// CHECK IMAGE LOCATIONS
				$query		=		$connection->prepare('SELECT * FROM weblog WHERE `id` = :id');
				$query->bindValue(':id',$id);
				$query->execute();

				// DELETE IMAGES
				if($row = $query->fetch()) {
					// New explore string to array
					$entries = explode('%',$row['plaatje0']);
					// Select each image and remove the image itself
					foreach($entries as $entry) {
						$entry_path = '..' . $entry;
						if(file_exists($entry_path)) {
							unlink($entry_path);
						}
					}
				}
				// RESET QUERY
				$query = null;

				// DELETE WEBLOG DB ENTRY
				$query		=		$connection->prepare('DELETE FROM weblog 
														  WHERE `id` = :id');
				$query->bindValue(':id',$id);
				$query->execute();
				header('Location: /main.php?pagina=weblog#content');
				die();
			}

			// HIDE WEBLOGPOST
			elseif($action == 'verbergen') {
				$query 		=	$connection->prepare('UPDATE weblog SET `publiceren` = 0 WHERE `id` = :id');
				$query->bindValue(':id', $id);
				$query->execute();
				header('Location: /main.php?pagina=weblog#content');
				die();
			}

			// SHOW WEBLOGPOST
			elseif($action == 'publiceren') {
				$query 		=	$connection->prepare('UPDATE weblog SET `publiceren` = 1 WHERE `id` = :id');
				$query->bindValue(':id', $id);
				$query->execute();
				header('Location: /main.php?pagina=weblog#content');
				die();
			}
		}


	} else {
		header('Location: /main.php?pagina=error&error=nietingelogd#content');
		die();
	}
?>