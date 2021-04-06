<?php
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	include_once "db_config.php";

	$query="select * from users";
	$result = get($query);
	
	$conn = mysqli_connect($server,$Name,$ID,$DOB,$Credit,$CGPA,$Dept_id,$db);
	$query="insert into users value (NULL,'$uname','$unum','$unum','$unum','$unum','$unum','user')";
	if (mysqli_query($conn,$query)){
		echo "User Inserted";
	}else{
		echo"Can not insert user";
	}

	}



?>
<table border="1" style="border-collapse:collapse;">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Department</th>
			<th colspan="2">Operation</th>
		</tr>
		
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["dob"]."</td>";
		echo "<td>".$row["credit"]."</td>";
		echo "<td>".$row["cgpa"]."</td>";
		echo "<td>".$row["dept_id"]."</td>";
		echo "<td><a href=''> Edit </a></td>";
		echo "<td><a href=''> Delete </a></td>";
		echo "</tr>";
	}
	

?>
</table>
