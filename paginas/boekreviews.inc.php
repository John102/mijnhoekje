<?php
	
	require_once('handlers/handler_database.php');

	$query 	=	$connection->query('SELECT * FROM boeken ORDER BY id DESC');
	$query->setFetchMode(PDO::FETCH_ASSOC);

	?>

	<h5>Boek Reviews</h5>

	<p>Zoals ik in <a style="color: #1494c9!important;" href="https://www.mijnhoekje.nl/main.php?pagina=weblogpost&id=54">mijn blogbericht</a> heb aangegeven ben ik begin 2019 begonnen met een goed voornemen; lezen. Om bij te houden wat ik allemaal heb gelezen heb ik een review pagina gebouwd. Ook motiveert dit mij tot op zekere hoogte om door te blijven gaan met lezen als ik even niet gemotiveerd ben.</p>
	<p>Hieronder vind je een lijst met de boeken die ik heb gelezen. Elk boek bevat een review link die je kunt bezoeken. De lijst word regelmatig uitgebreid.</p>

	<hr class="ruler" />
	<br/><br/>


	<?php


	if($rows = $query->fetchAll()) {

		//Table Markup
		echo '<table>';
		echo 	'<tr>';
		echo 		'<th>Thumbmail</th>';
		echo 		'<th>Titel</th>';
		echo 		'<th>Auteur</th>';
		echo 		'<th>Review</th>';
		echo 		'<th>Geplaatst op</th>';
		echo 	'</tr>';

		// Books Markup
		foreach($rows as $row) {

			echo '<tr>';
			echo 	'<td><img src="'.$row['image'].'" class="thumbnail_book" /></td>';
			echo 	'<td>'.$row['titel'].'</td>';
			echo 	'<td>'.$row['auteur'].'</td>';
			echo 	'<td><a target="_self" href="/main.php?pagina=boekreview&id='.$row['id'].'">Bekijk Review</a></td>';
			echo 	'<td>'.$row['timestamp'].'</td>';
			echo '</tr>';

		}

		echo '</table>';

	} else {

		echo 'Er zijn geen entries gevonden.';

	}

?>