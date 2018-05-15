<?php


	$db_host = "94.138.203.35";
	$db_name = "muhendislik";
	$db_user = "proje2";
	$db_pass = "Sivas5858";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db_con->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>