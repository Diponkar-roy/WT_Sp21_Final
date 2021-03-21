<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username=$_POST ["username"];
		$password=$_POST ["password"];
		if ($username == "diponkar" && $password=="321456"){
			setcookie("username",$username,time()+60);
			header("Location: dashboard.php");
			
		}
		
	}
	
?>

<html>
	<head></head>
	<body>
		<form action="" method="post">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="login">
	</form>
	</body>
	
</html>