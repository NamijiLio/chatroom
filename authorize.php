<meta http-equiv = "content-Type" content="text/html; charset = utf-8" />
<?php
$String1 = $_REQUEST['mail'];
$String2 = $_REQUEST['passwd'];

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

//設定session全域變數
session_start(); //開啟session的語法 要放在檔案最上方
setcookie("mail_test",$String1);
//$_SESSION['mail_test']="$String1"; //設定mail這個session變數的值為$String1

/*
    $b的值為"freshman",也就是a.php中$a的值
    $c的值為null, 因為在存取前$_SESSION["id"]已被清空
*/

//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");

# MySQL/MariaDB 指令
$sqlQuery = "SELECT * FROM `my_db`.`user_data` WHERE mail = '$String1'";
$sqlQuery2 = "SELECT * FROM `my_db`.`user_data` WHERE passwd = '$String2'";

//呼叫query方法(SQL語法)
$status = $connect->query($sqlQuery);
$status2 = $connect->query($sqlQuery2);

if ($status and $status2) {
    echo '<script language="JavaScript">alert("登入成功")
    ;location.href="board.php"</script>';
}
else if($status) {
    echo '<script language="JavaScript">alert("帳號或密碼錯誤")
    ;location.href="welcome.html"</script>';
}
else
	echo "pass";
?>
