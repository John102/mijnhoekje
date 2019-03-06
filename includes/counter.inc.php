<?php

	session_start();
	require_once('handlers/handler_database.php');
	
	// Gather Intel
	$visitor_ip						=		$_SERVER['REMOTE_ADDR'];
	$visitor_port					=		$_SERVER['REMOTE_PORT'];
	$visitor_browser				=		$_SERVER['HTTP_USER_AGENT'];
	$visitor_host					=		$_SERVER['REMOTE_HOST'] ?: gethostbyaddr($_SERVER['REMOTE_ADDR']);
	
	// Set session variables
	$_SESSION['visitor_ip']			=		$visitor_ip;
	$_SESSION['visitor_port']		=		$visitor_port;
	$_SESSION['visitor_browser']	=		$visitor_browser;
	$_SESSION['visitor_host']		=		$visitor_host;
	
	// Session variable to sql variables
	$ip								=		$_SESSION['visitor_ip'];
	$port							=		$_SESSION['visitor_port'];
	$browser						=		$_SESSION['visitor_browser'];
	$host							=		$_SESSION['visitor_host'];

	// Check Database for IP uniqueness
	$checkQuery					=		$connection->prepare('SELECT ip, views FROM bezoekers WHERE ip=:ip');
	$checkQuery->bindValue(':ip',$ip);
	$checkQuery->execute();
	$checkResult = $checkQuery->fetch(PDO::FETCH_ASSOC);
	
	
	// If IP not in Database yet, add
	if(!$checkResult) {
		
		$insertQuery 		=		$connection->prepare('INSERT INTO bezoekers (ip, port, browser, host) VALUES (:ip,:port,:browser,:host)');
		$insertQuery->bindValue(':ip',		$ip);
		$insertQuery->bindValue(':port',	$port);
		$insertQuery->bindValue(':browser',	$browser);
		$insertQuery->bindValue(':host',	$host);

		$insertQuery->execute();

		// If IP does exist, Add a view
	} else {
	
		$views		=		$checkResult['views'];
		
		// Shut down own IP
		if($checkResult['ip'] != '87.214.180.43') {
			$views		=		$views + 1;
		}
	
		
		$updateQuery		=		$connection->prepare('UPDATE bezoekers SET views=:views WHERE ip=:ip');
		$updateQuery->bindValue(':views', $views);
		$updateQuery->bindValue(':ip', $ip);
		$updateQuery->execute();
		
	}

?>