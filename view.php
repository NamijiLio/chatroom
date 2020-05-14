<html>
    <head>
        <title>列出所有留言</title>
    </head>
    <body>
        <a href="board.php">寫寫留言</a><p>

        <?php

        $host = 'localhost';
        //登入phpmyadmin帳號
        $user = 'root';
        //登入phpmyadmin密碼
        $passwd = '123456';
        //資料庫名稱
        $database = 'message_db';
        //實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
        $connect = new mysqli($host, $user, $passwd, $database);

        $connect->query("SET NAMES 'utf8'");

        if($connect->connect_error){
            die("資料庫連線失敗: " . $connect->connect_error);
        }
        //echo "資料庫連線成功";
            /* 查詢欄位資料 */
            $sql = "SELECT * FROM `message_db`.`user_message` ORDER BY `guestID` DESC";  //從message_db讀取資料並依guestID欄位做遞減排序
            
            //if ($result = $connection->query($sql)) {
              # 取得結果
        if ($result = $connect->query($sql)) {
            while ($row = mysqli_fetch_row($result)) {
               // printf ("使用者ID: %s 電話號碼: %s\n", $row[0], $row[2]);
                printf ("使用者ID: %s \n", $row[0]);
                echo "   ";
                echo "留言主題:".$row[1];
                //echo "<br>訪客姓名:".$row[0];
                echo "<br>留言內容:".$row[2];
                echo "<br>留言時間:".$row[3];
                echo "<hr>";
              }
        }
             

              # 釋放資源
         //     $result->close();
          // } 
        //    else {
       //       echo "執行失敗：" . $connection->error;
      //      }
            
            /* 顯示資料庫資料 */
            //while ($row=$result->fetch_row())
        //    {
        //        echo "留言主題:".$row[1];
            //    echo "<br>訪客姓名:".$row[0];
            //    echo "<br>留言內容:".nl2br($row[2]);
           //     echo "<br>留言時間:".$row[3];
          //      echo "<hr>";
        //    }
                //echo "共".mysqli_num_rows($result)."筆留言";
                //nl2br
        ?>
        <a href="welcome.html">回首頁</a>
    </body>
</html>