<?php
	session_start();
	if (!isset($_SESSION["username"])){
		header("Location:Task1.php");
	}
?>


<html>
	<!--<h1> Welcome Diponkar Roy <?php echo $_Cookie["username"];?></h1>-->
	<h1>Welcome Diponkar Roy <? echo $_SESSION["username"];?></h1>
</html>