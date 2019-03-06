<ul id="footer">
	<li>	<a href="https://www.facebook.com/john.vandenelzen.58?ref=bookmarks" target="_blank" class="fa fa-facebook"></a></li>
	<li>	<a href="https://www.linkedin.com/in/john-van-den-elzen-29647a176" target="_blank" class="fa fa-linkedin"></a></li>
	<li>	<a href="https://twitter.com/John26295736?lang=nl" target="_blank" class="fa fa-twitter"></a></li>
	<li>	<a href="skype:johnny.van.den.elzen?call" target="_blank" class="fa fa-skype"></a></li>
	<!--<li>	<s><a href="#" target="_blank" class="fa fa-instagram"></a></s>	</li>-->
</ul>
<p class="footer-text"><a target="_self" href="https://www.mijnhoekje.nl/">mijnhoekje.nl ©</a></p>
<p class="footer-text">Code en design door John van den Elzen </p>
<p class="footer-text">
	
	<?php

		$count = $connection->query('SELECT count(*) FROM bezoekers')->fetchColumn();
		echo $count . ' unieke bezoekers sinds 15 januari 2019.';

	?>

</p>
