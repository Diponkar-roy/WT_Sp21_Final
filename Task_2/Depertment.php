<?php
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	include_once "db_config.php";

	$query="select * from users";
	$result = get($query);
	
	$conn = mysqli_connect($server,$Name,$id,$db);
	$query="insert into users value (NULL,'$uname','$unum','user')";
	if (mysqli_query($conn,$query)){
		echo "User Inserted";
	}else{
		echo"Can not insert user";
	}

	}



?>
<html>
	<body>
		<form action="" method="post">
			<input type ="text" name="uname" placeholder="usename"><br>
			<input type ="text" name="unum" placeholder="ID"><br>
			<input type ="submit" value="register">
		
		</form>
	
	</body>



</html>