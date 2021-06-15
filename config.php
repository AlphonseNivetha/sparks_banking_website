<?php

	$db_host='localhost';
	$db_user='id16977378_nivetha';
	$db_pass='Nivetha@12345';
	$db_name='id16977378_credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>