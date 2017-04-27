<?php
	
	//TODO : Mettre le bon fichier de database ici selon le projet
	define('DATABASE_FILE', 'GameOnTP4.accdb');
	
	
	$dbName =  dirname(__FILE__)."\\".DATABASE_FILE;
		
	if (!file_exists($dbName)) {
	    die("Erreur, fichier de BD introuvable");
	}
	
	$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)};charset=UTF-8; DBQ=$dbName; Uid=; Pwd=;");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>