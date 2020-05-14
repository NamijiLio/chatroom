<?php
	session_start();
//	echo isset($_SESSION['mail_test']);

	//unset($_SESSION['mail']); //清空$_SESSION["mail"]

//	$_SESSION["name_record"] = $name_show;//設定name_record這個session變數的值為$name_show:用於add.php
?>
<html>
	<head>
	<title>留言板</title>
	</head>

	<body>
	<a href="view.php">觀看留言</a><p>
	<form action="add.php" method="post" >
		使用者：
			<?php
				$F_bold = '<b>';
				$E_bold = '</b>';
				echo $F_bold.$_COOKIE['mail_test'].$E_bold;  
			?>
			<br>
		主題：<input type="text" name="subject"><br>
		內容：<textarea rows=7 name="content"></textarea><br>
		<input type="submit" name="Submit" value="送出">
		<input type="Reset" name="Reset" value="重新填寫">
	</form>

	<a href="welcome.html">回首頁</a>
	</body>
</html>