<?php

	session_start();
	require_once('handlers/handler_database.php');
	require_once('handlers/sanitize.php');

	// Geen Admin
	if(!verifyLevel(1)) {
		header('Location: /main.php?pagina=error&error=nietingelogd');
		die();
	// Admin
	} else {

?>

<h1>Chatbox <span class="sup red">Alpha</span></h1>

<section class="chatbox-window">

	<?php
		//****************//
		// CHATBOX LADEN  //
		//****************//
		if($_chatbox = json_decode(file_get_contents("logs/chatbox.json"), true)) {

			if($_chatbox != "" || $_chatbox != null) {

				// BERICHTEN WEERGEVEN
				for($i = 0 ; $i < (sizeof($_chatbox)) ; $i++) {

					$tijd = date('H:i:s',$_chatbox[$i]["tijd"]);

					echo '<i>'. $tijd . '</i> <b>[' . $_chatbox[$i]["gebruiker"] . ']</b> ' . $_chatbox[$i]["bericht"] . '<br/>';


				}

			}

		} else {
			echo 'Er zijn geen chatberichten.';
		}


	?>

</section>

<br/>
<br/>

<!-- CHAT INPUT FORM -->

<form action="handlers/handler_chatbox.php" method="POST">

	<label for="chatbox-bericht"></label>
	<input type="text" name="chatbox-bericht" placeholder="type hier je bericht..." autocomplete="false" required/>

	<br/>
	<br/>

	<input type="submit" value="Verstuur" />

</form>


<?php

	}
?>