<?php
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	include_once "db_config.php";

	//$query="select * from users";
	//$result = get($query);
	
	
?>
	<html>
	<head>
	</head>
	<body>
	<a href="AllStudents.php"> All Students </a>
	<p></p>
	<a href="AddStudent.php"> Add Student </a>
	<p></p>
	<a href=""> Edit Student </a>
	<p></p>
	
	</body>
</html>	