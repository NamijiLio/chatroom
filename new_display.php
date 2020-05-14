<html>
<head>
	<title>chatroom</title>
	<meta http-equiv="refresh" content="5; url=new_display.php">
</head>
<body bgcolor="#ffffcc">
	<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '123456';
		$database = 'chat2';
		$bd = mysqli_connect($servername, $username, $password, $database);
		if (!$bd) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM chatroom ORDER BY time;";
		$result = mysqli_query($bd,$sql);
		$rows = mysqli_num_rows($result);
		mysqli_data_seek($result,$rows-10);
		if ($rows <10) {
		 	$l = $rows;
		 }else{
		 	$l = 10;
		 }
		 for ($i=1; $i<=$l ; $i++) { 
		 	 $rows = mysqli_fetch_array($result);
		 	 echo $row["time"]; echo "  "; echo $row["name"]; echo "->:";
		 	 echo $row["content"]; echo "<BR>"; }
		 	 mysqli_data_seek($result,$rows-20);
		 	 $row = mysqli_fetch_array($result);
		 	 $last = $row["time"];
		 	 $sql = "DELETE FROM chatroom WHERE time<'$last';";
		 	 $result = mysqli_query($bd,$sql);
		 ?>
</body>
</html>