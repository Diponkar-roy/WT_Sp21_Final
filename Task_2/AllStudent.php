<?php
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	include_once "db_config.php";

	$query="select * from users";
	$result = get($query);
	
	$conn = mysqli_connect($server,$Name,$ID,$DOB);
	$query="insert into users value (NULL,'$uname','$pass','user')";
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
			<input type ="text" name"uname" placeholder="usename"><br>
			<input type ="password" name="pass" placeholder="password"><br>
			<input type ="submit" value="register">
		
		</form>
	
	</body>



</html>