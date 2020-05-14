<?php

$Target = $_REQUEST['Name_to_delete'];

$server = "localhost";         # MySQL/MariaDB 伺服器
$dbuser = "root";       # 使用者帳號
$dbpassword = "123456"; # 使用者密碼
$dbname = "my_db";    # 資料庫名稱

# 連接 MySQL/MariaDB 資料庫
$connection = new mysqli($server, $dbuser, $dbpassword, $dbname);

# 檢查連線是否成功
if ($connection->connect_error) {
  die("連線失敗：" . $connection->connect_error);
}

# MySQL/MariaDB 指令
$sqlQuery = "DELETE FROM phone_number WHERE name = '$Target'";

# 執行 MySQL/MariaDB 指令
if ($connection->query($sqlQuery) === TRUE) {
  echo "成功刪除資料。";
} else {
  echo "執行失敗：" . $connection->error;
}

# 關閉 MySQL/MariaDB 連線
$connection->close();
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>提取資料</title>
</head>
<body>
    <br>
    <a href="index.html">回首頁</a>
</body>
</html>
