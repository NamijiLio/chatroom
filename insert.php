<meta http-equiv = "content-Type" content="text/html; charset = utf-8" />
<?php
$String1 = $_REQUEST['new_mail'];
$String2 = $_REQUEST['new_name'];
$String3 = $_REQUEST['new_passwd'];

$host = 'localhost';
//登入phpmyadmin帳號
$user = 'root';
//登入phpmyadmin密碼
$passwd = '123456';
//資料庫名稱
$database = 'my_db';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);

if($connect->connect_error){
	die("資料庫連線失敗: " . $connect->connect_error);
}
//echo "資料庫連線成功";

//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");

$sql = "INSERT INTO `my_db`.`user_data` (`mail`, `name`,`passwd`) VALUES ('$String1', '$String2','$String3')";
//呼叫query方法(SQL語法)
$status = $connect->query($sql);
 
if ($status) {
    echo "<script>alert('新增成功')</script>";
} else {
	//echo "<script>alert('新增失敗! 請重新檢查輸入內容')</script>";
    echo '<script language="JavaScript">alert("新增失敗! 請重新檢查輸入內容!")
    ;location.href="register.html"</script>';
    //echo "Failed Reason: " . $sql . "<br>" . $connect->error;
}


?>

<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>新增資料</title>
</head>
<body>
	<p>帳號建立完成!</p>
	<table border="2">
			<tr>
				<td>電子郵件:
					<?php
						echo "$String1";
					?>	
				</td>
			</tr>
			<tr>
				<td>使用者名稱:
					<?php
						echo "$String2";
					?></td>
			</tr>
			<tr>
				<td>密碼:
					<?php
						for($i=0;$i<=strlen($String3);$i++)
						{
							echo "*";
						}
					?>
				</td>
			</tr>
	</table>
	<br>
	<a href="welcome.html">按我重新登入</a>
</body>
</html>
