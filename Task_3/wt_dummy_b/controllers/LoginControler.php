<?php
	$name="";
	$err_name="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError = true;
		$err_name="<br>Name required";}
		else{
			$name=$_POST["name"];
		}
	}
?>