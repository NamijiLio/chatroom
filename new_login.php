<?php
	require 'new_function.php';
	$Registered_success="false";
	//echo"{";
	//echo "\"UserID\":";
	if (isset($_POST["UserID"])) {
		# code...
		$UserID = $_POST["UserID"];
		echo '<script language="JavaScript">alert("userID log in")
    		;location.href="board.php"</script>';
	}else{
		echo '<script language="JavaScript">alert("no userID")
    		;location.href="board.php"</script>';
		//echo no userID
	}
	//echo Password;
	if (isset($_POST["Password"])) {
		$Password_Login=$_POST["Password"];
		//echo $Password_Login;
		echo '<script language="JavaScript">alert("password log in")
    		;location.href="board.php"</script>';
	}else{
		echo '<script language="JavaScript">alert("no password")
    		;location.href="board.php"</script>';
		//echo "no_password";
	}

	//echo "}";
	if (authenticateUser($UserID, $Password_Login)) {
		
		setcookie("UserID",$UserID);
		setcookie("Password_Login",$Password_Login);
		header('Location: new_main.html');
		exit();
	}else{
		header('Location: new_login.html');
		exit();
	}
