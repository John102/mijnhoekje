<a id="brand" href="https://www.mijnhoekje.nl/"> 	MIJNHOEKJE.NL 	</a>

<a href="main.php?pagina=weblog">			weblog			</a>
<a href="main.php?pagina=nieuws">			nieuws 			</a>
<a href="main.php?pagina=ikben">			over mij		</a>
<a href="main.php?pagina=studienotities">	studienotities	</a>
<a href="main.php?pagina=boekreviews">		boekreviews		</a>
<a href="main.php?pagina=contact">			contact			</a>
<a href="javascript:void(0);" class="icon" onclick="navFunction()"><i class="fa fa-bars"></i></a>

<?php

	

	// MOD AND UP
	if(verifyLevel(1)) {
		echo '<a href="main.php?pagina=dashboard">			my dashboard	</a>';
	} else {
		echo '<a href="main.php?pagina=login">			login	</a>';
	}

	// ADMIN AND UP

?>