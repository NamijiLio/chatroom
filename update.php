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

$before_name_var = $_REQUEST['before_name'];
$update_name_var = $_REQUEST['update_name'];
$before_phone_var = $_REQUEST['before_phone'];
$update_phone_var = $_REQUEST['update_phone'];

$updateSql_name = "UPDATE phone_number SET name = 'update_name_var' WHERE name = 'before_name_var'";

$updateSql_phone = "UPDATE phone_number SET phone = 'update_phone_var' WHERE phone = 'before_phone_var'";
//呼叫query方法(SQL語法)
$status_name = $connect->query($updateSql_name);
 
if ($status_name) {
    echo '姓名更新成功' . "<br>";
} else {
    echo "錯誤: " . $updateSql_name . "<br>" . $connect->error;
}

$status_phone = $connect->query($updateSql_phone);
 
if ($status_phone) {
    echo '電話更新成功' . "<br>";
} else {
    echo "錯誤: " . $updateSql_phone . "<br>" . $connect->error;
}
?>