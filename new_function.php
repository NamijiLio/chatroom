<?php
function authenticateUser($UserID,$password){

	$servername = 'localhost';
	$username = 'root';
	$password = '123456';
	$database = 'chat2';

	$bd = mysqli_connect($servername, $username, $password, $database);
	if (!$bd) {
		die("Connection failed: " . mysqli_connect_error());
	}
		$sql = "SELECT * FROM Users WHERE UserID= '$UserID' AND password='$password'";
		$rows = mysqli_query($bd,$sql);

	if ($row=mysqli_num_rows($rows)) {
		return 1;
	}else{
		return 0;
	}
}
?>