<?php

	// VARIABLES
	$base_url			=	"https://www.mijnhoekje.nl/";
	$dir_classes		= 'paginas/classes/';
	$dir_icons			= 'img/';
	$dir_multimedia		= 'multimedia/';
	$class_220901		= $dir_classes . 'aplus-220901/';
	$class_220902		= $dir_classes . 'aplus-220902/';
	$img_rootdir		= $class_220901 . 'multimedia/';
	$img_misc			= $img_rootdir . 'misc/';
	$img_connectors 	= $img_rootdir . 'connectors/';
	$img_cables			= $img_rootdir . 'cables/';

	// OPSCHONEN INGEVOERDE DATA
	function testData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// VERIFIËER GEBRUIKERSLEVEL
	function verifyLevel($level) {
		if($level > $_SESSION['vlag']) {
			return false;
		} else {
			return true;
		}
	}

	// VERIFIËER MEERDERE IMAGES
	function verifyImage($imageName) {

		$plaatjes = array();
		$i = 0;
		// Elk plaatje handlen
		foreach($_FILES[$imageName]["name"] as $key=>$value) {

			// Plaatje Handlen
			$targetDir	=	'../img/uploads/' . date('Y') . '/' . date('F') . '/';
			$targetFile	=	$targetDir . basename($_FILES[$imageName]["name"][$key]);
			$imageType	=	strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
			$check		=	getimagesize($_FILES[$imageName]["tmp_name"][$key]);

			// Directory maken als nog niet bestaat
			if(!file_exists($targetDir)) {
				mkdir($targetDir,0777,true);
			}
			// Titel van file bestaat al in map
			if(file_exists($targetFile) && $targetFile != '') {
				header('Location: /main.php?pagina=error&error=dupeimage#content');
				die();
			}

			// Type plaatje is niet goed 
			if($imageType != 'png' && $imageType != 'jpg' && $imageType != 'jpeg' && $imageType != 'gif') {
				header('Location: /main.php?pagina=error&error=faultyimage#content');
				die();
			}

			// uploaden
			if(move_uploaded_file($_FILES[$imageName]["tmp_name"][$key], $targetFile)) {
				$plaatje[$key] 	= 	substr($targetFile, 2);
				$plaatjes[$i]	= 	$plaatje[$key];
				$i++;
			}
		}
		return $plaatjes;
	}
		
	// FORM CHECKUP TEXT
	function verifyFormText($data) {
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			// IF EMPTY
			if(empty($data)) {
				header('Location: /main.php?pagina=error&error=leegveld#content');
				die();
			} else {
				// CHECK PATTERN
				if(!preg_match("/^[a-zA-Z0-9\s]+$/", $data)) {
					header('Location: /main.php?pagina=error&error=illegalchar#content');
					die();
				}

				$tested_data = testData($data);
				return $tested_data;
			}
		}
	}

	// FORM CHECKUP MAIL
	function verifyFormMail($data) {
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			// IF EMPTY
			if(empty($data)) {
				header('Location: /main.php?pagina=error&error=leegveld#content');
				die();
			} else {
				// CHECK EMAIL
				if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
					header('Location: /main.php?pagina=error&error=contactfoutiefemail#content');
					die();
				}

				$tested_data = testData($data);
				return $tested_data;
			}
		}
	}

	// SESSION TIMEOUT
	function sessionExpiration() {
		// Check of ingelogd
		if(isset($_SESSION['uid'])) {
			// Laatste update was meer dan 30 minuten geleden
			if(isset($_SESSION['tijd']) && (time() - $_SESSION['tijd'] > 1800)) {
				session_unset();
				session_destroy();
				// Redirect naar uitgelogd pagina
				header('Location: /main.php?pagina=status&status=uitgelogd');
				die();
			}
		}
		// Update session
		$_SESSION['tijd'] = time();
		//echo $_SESSION['uid'] . ' ' . $_SESSION['tijd'];
	}
?>