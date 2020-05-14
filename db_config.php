<?php

	$db_host = 'localhost';
	$db_name = 'myschool';
	$db_username = 'patrick';
	$db_password = 'jmeRj9nM3bRvlkps';

	$dsn = "mysql:host=$db_host;dbname=$db_name";

	try{

		$db_connection = new PDO($dsn, $db_username, $db_password);

	}catch(Exception $e){
		echo "there was a failure - " . $e->getMessage();
	}

		