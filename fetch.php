<?php

$name = $_REQUEST['find_name'];
$meow
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
$sqlQuery = "SELECT * FROM `user_data` WHERE name = '$name'";

# 執行 MySQL/MariaDB 指令
if ($result = $connection->query($sqlQuery)) {
  # 取得結果
  while ($row = $result->fetch_row()) {
    printf ("使用者ID: %s 電話號碼: %d\n", $row[0], $row[2]);
  }

  # 釋放資源
  $result->close();
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
