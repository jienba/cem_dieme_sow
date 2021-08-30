<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=csns;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		//$db = new PDO('mysql:host=localhost;dbname=css;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Error' .$e->getMessage());
	}
 ?>
