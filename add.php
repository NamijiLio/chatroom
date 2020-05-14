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

	if($connect->connect_error){
		die("資料庫連線失敗: " . $connect->connect_error);
	}
	//echo "資料庫連線成功";


    // include("connect_message_db.php");                    //匯入db.php檔案
	/* 接收表單資料 */

	session_start();
//	$String1 = $_SESSION['name_record'];//設定name為name_record這個session變數的值
//	unset($_SESSION['name_record']); //清空$_SESSION["name_record"]
	$String1 =$_COOKIE['mail_test'];
	$String2 =$_REQUEST['subject'];
	$String3 =$_REQUEST['content'];
	//unset($_SESSION['mail_test']); //清空$_SESSION["mail"]

	/* 將欄位資料加入資料庫 */
	//$sql="INSERT guestbook (name,mail,subject,content,putdate)
	//VALUES ('$name','$subject','$content',now())";

	//設定連線編碼，防止中文字亂碼
	$connect->query("SET NAMES 'utf8'");

	$sql = "INSERT INTO `message_db`.`user_message` (`name`,`subject`,`content`) VALUES ('$String1','$String2','$String3')";
	$status = $connect->query($sql);

	if ($status) {
	    echo "<script>alert('新增成功')</script>";
	} else {
	    echo '<script>alert("新增失敗! 請重新檢查輸入內容!")</script>';
	}

	header("location:board.php");
?>