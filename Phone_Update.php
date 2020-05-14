<meta http-equiv = "content-Type" content="text/html; charset = utf-8" />
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = 'root';
//改成你登入phpmyadmin密碼
$passwd = '123456';
//資料庫名稱
$database = 'my_db';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功" . "<br>";
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");

$old_phone = $_REQUEST['before_phone'];
$new_phone = $_REQUEST['update_phone'];

$update = "UPDATE phone_number SET phone = $new_phone WHERE phone = $old_phone";

//呼叫query方法(SQL語法)
$status_phone = $connect->query($update);
 
if ($status_phone) {
    echo '電話更新成功' . "<br>";
} else {
    echo "錯誤: " . $update . "<br>" . $connect->error;
}
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>更新電話</title>
</head>
<body>
    <br>
    <a href="index.html">回首頁</a>
</body>
</html>