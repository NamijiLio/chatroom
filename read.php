<?php

	require_once('db_config.php');

	$query = "SELECT endDate FROM teachers";

	if ($results = $db_connection->query($query)) {
		foreach ($results as $result) {
		echo $result['firstname'] . " " . $result['surname'];
		echo "<br>";
		}
	}else{
		echo "No results to display.";
	}

	$db_connection = NULL; 