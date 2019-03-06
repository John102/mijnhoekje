<?php
	
	require_once('handlers/handler_database.php');

	if(isset($_GET['id']) && is_numeric($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		'Er is geen geldige waarde opgegeven.';
	}

	$query = $connection->prepare('SELECT * FROM boeken WHERE id=:id');
	$query->bindValue(':id',$id);
	$query->execute();
	$query->setFetchMode(PDO::FETCH_ASSOC);

	if($rows = $query->fetchAll()) {

		foreach($rows as $row) {

			echo '<h5>'.$row['titel'].'</h5>';
			echo nl2br($row['review'],true) . '<br/>';
			echo '<img onclick="popImage(this.src)" class="image-post" src="'.$row['image'].'" />';
			echo '<hr class="ruler" />';
			echo '<small class="light">Geplaatst op ' . $row['timestamp'];
			echo '</small><br/><br/><br/>';
			echo '<br/><a class="prevpage" target="_self" href="javascript:history.go(-1)">Terug</a>';


		}

	} else {
		echo 'Er is geen boek met dit id gevonden.';
	}
?>