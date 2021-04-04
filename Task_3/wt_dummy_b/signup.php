<?php include 'main_header.php';?>
<?php
	$name="";
	$err_name="";
	$hasError = false;
	if($_SERVER["REQUEST METHOD"] == "POST"){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="<br>Name requred";
	}else{
		$name=$_POST["name"];
		}	
	}
?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post"   class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" value="<?php echo $name;?>" class="form-control">
			<span><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>