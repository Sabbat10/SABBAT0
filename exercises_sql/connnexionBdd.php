<?php
	try {
		
		$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=sabbat', 'root', '');
	} catch (Exception $e) {
		die('Erreur '.$e->getMessage());
	}