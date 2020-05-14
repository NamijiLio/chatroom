<meta http-equiv = "content-Type" content="text/html; charset = utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//database's name
$db_name = "message_db";
//db's administer account
$db_user = "root";
//db's administer password
$db_passwd = "123456";

//connect to db
$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
if(mysqli_connect_errno($db))
	echo "無法對資料庫連線!" . mysqli_connect_error();
//mysqli_connect_error represent the "error messsage"

//Setting db connection using 'UTF-8'
mysqli_set_charset($db,'utf-8');

//Select db
if(!@mysqli_select_db($db,'message_db'))
	die("無法使用資料庫");
?>
