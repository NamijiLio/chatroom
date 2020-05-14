<html>
    <head>
	<title>information</title>
    </head>
    <body>

	<?php
	    include("connect.php");
	    
	    $sql = "SELECT * FROM phone_number";
	    if($stmt = $db->query($sql))
	    {
	        while($result = mysqli_fetch_object($stmt))
		{
		    echo '<p>name： ' .$result->name. ',phonenumber：' .$result->phone. '</p>';   
		}	
	    }
	?>

    </body>

</html>
