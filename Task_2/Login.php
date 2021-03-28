<?php
	require_once "db_config.php";
	$uname = "";
	$pass="";
	if ($_SERVER["REQUEST METHOD"]=="post"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$query ="select * from users when username ='$uname' and password ='$pass'";
		$result= get ($query);
		if (count($result)>0){
			session_start();
			$_SESSION["LOGGEDIN"]$uname;
			
			
			header ("Location: dashboard.php");
		}
		else{
			echo"Username or password is invalid";
		}
	}
?>

<html>
	<body>
		<form action="" method="post">
			<input type ="text" name"uname" placeholder="usename"><br>
			<input type ="password" name="pass" placeholder="password"><br>
			<input type ="submit" value="login">
		
		</form>
	
	</body>



</html>