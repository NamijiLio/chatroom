<?php
	$String1 = $_POST['var'];
	$String2 = $_POST['var2'];
?>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>顯示回傳值</title>

</head>
<body>
	<div>
		<?php
			echo $String1;
		?>
		<br>
		<?php
		    echo $String2;
		?>
	</div>
	<a href="index.html">回首頁</a>
</body>
</html>
