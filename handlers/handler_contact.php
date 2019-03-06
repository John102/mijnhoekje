<?php
	
	require('sanitize.php');

	// RESETTEN VAN VARIABELEN
	$cnctNaam = $cnctEmail = $cnctTekst = '';

	// BEHANDELEN EN OPSLAAN INGEVOERDE DATA
	if(isset($_POST['submit'])) {

		$cnctNaam 	=	verifyFormText($_POST['cnct-naam']);	// sanitize.php heeft de functies
		$cnctEmail 	=	verifyFormMail($_POST['cnct-email']);
		$cnctTekst 	=	testData($_POST['cnct-tekst']);
		
		// SETTING UP EMAIL
		$to			=		'john@mijnhoekje.nl';
		$from		=		$cnctEmail;
		$name 		=		$cnctNaam;
		$subject	=		'Contact Formulier';
		$message	=		$cnctTekst;

		$headers	=	"MIME-Version: 1.0\r\n";
		$headers	.=	"Content-type: text/html; charset=ISO-8859-1\r\n";
		$headers	.=	"From: " . $from . "\r\n";


		$msg		=	"<html><body>";
		$msg		.=	"<p>Email van: " . $name . "</p>";
		$msg		.=	"<p>Verzonden via: " . $from . "</p>";
		$msg		.=	"<p>Onderwerp: " . $subject . "</p>";
		$msg		.=	"<p>Bericht: " . $message . "</p>";
		$msg		.=	"</body></html>";
		
		$mailsuccess = mail($to, $subject, $msg, $headers);
		
		
		if($mailsuccess == TRUE) {
			header('Location: /main.php?pagina=status&status=contactverzonden');
			die();
		} else {
			header('Location: /main.php?pagina=error&error=contactnietverzonden');
			die();
		}
	
	}

?>