<html>
	<head>
		<title>speak</title>
	</head>
	<body bgcolor="#ffffcc">
		<?php
			if (isset($_POST["words"])) {
				$words = $_POST["words"];
				$UserID = $_COOKIE["UserID"];
			if ($words) 
			{
				$servername = 'localhost';
				$username = 'root';
				$password = '123456';
				$database = 'chat2';
				$bd = mysqli_connect($servername, $username, $password, $database);
				if (!$bd) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$time = Date("Y-m-j H:i:s");
				$sql = "INSERT INTO chatroom (time,content,name) VALUES ('$time', '$words', '$UserID')";
				$rows = mysqli_query($bd,$sql); 
			}
			}//end if 
		?>
		<?php
			echo "<div align='center'>" . $_COOKIE["UserID"]."::Please Input your message:</div>";
		?>
		<form action ="new_speak.php" method="post">
			<div align="center">
				<input type="text" name="words" cols="20">
				<input type="submit" value="speak">
			</div>
		</form>
	</body>
</html>