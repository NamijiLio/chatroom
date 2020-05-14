<?php

	$db_host = 'localhost';
	$db_name = 'company';
	$db_username = 'root';
	$db_password = '123456';

	$dsn = "mysql:host=$db_host;dbname=$db_name";

	$db_connection = new PDO($dsn, $db_username, $db_password);

	$query = "SELECT * FROM users";

	$db_connection->query($query);

	$results = $db_connection->query($query);

	$db_connection = NULL;

	foreach ($results as $result) {
		echo $result['name'];
		echo "<br>";
	}