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

$old_name = $_REQUEST['before_name'];
$new_name = $_REQUEST['update_name'];

$update = "UPDATE phone_number SET name = '$new_name' WHERE name = '$old_name'";

//呼叫query方法(SQL語法)
$status_name = $connect->query($update);
 
if ($status_name) {
    echo '姓名更新成功' . "<br>";
} else {
    echo "錯誤: " . $update . "<br>" . $cosnnect->error;
}
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>更新姓名</title>
</head>
<body>
    <br>
    <a href="index.html">回首頁</a>
</body>
</html>