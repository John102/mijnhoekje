<?php
	session_start();
	require('handlers/sanitize.php');
	include('includes/counter.inc.php');

	sessionExpiration();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mijnhoekje.nl - Mijn persoonlijke hoekje op het wereld wijde web.</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/main_default_sass.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php
			$timestamp = time();
		
			if(date('n',$timestamp) === '12') {
				$isChristmas = true;
			} else {
				$isChristmas = false;
			}
				
			if($isChristmas) {
				echo '<script src="js/snowstorm.js"></script>';
			}
		?>
	</head>
	<body>
		<header>
			<!-- NAV -->
			<nav>
				<?php 	include('includes/navigation.inc.php');	 ?>
			</nav>
		</header>
		<!-- CONTENT -->
		<section id="content">
			<section id="pagina">
				<?php
					if(!isset($_GET['pagina'])) {
						include('paginas/voorpagina.inc.php');
					} else {
						$pagina = testData($_GET['pagina']);

						$paginaLijst = array('ikben',
											 'weblog',
											 'postweblog',
											 'weblogpost',
											 'contact',
											 'login',
											 'error',
											 'status',
											 'dashboard',
											 'postnieuws',
											 'nieuws',
											 'studienotities',
											 'notities',
											 'notitie',
											 'voorpagina',
											 'chatbox',
											 'registreren',
											 'ledenlijst',
											 'visitoroverview',
											 'postboek',
											 'boekreviews',
											 'boekreview');
						
						if(in_array($pagina, $paginaLijst)) {
							include('paginas/' . $pagina . '.inc.php');
						} else {
							include('paginas/error.inc.php');
						}
					}
				?>
			</section>
		</section>
		<!-- FOOTER -->
		<footer>
			<?php include('includes/footer.inc.php'); ?>

		</footer>
		<!-- POPUP IMAGE -->
		<?php 	include('includes/modal.inc.php'); ?>

		<script src="js/classManagement.js"></script>
	</body>
</html>