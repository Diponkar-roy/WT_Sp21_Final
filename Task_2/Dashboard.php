<?php
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	include_once "db_config.php";

	$query="select * from users";
	$result = get($query);
	
	
?>
	<table border="1" style="border-collapse:collapse;">
		<tr>
			<th>Allstudents</th>
			<th>Addstudent</th>
			<th>AllDepertment</th>
			<th>AddDepertment</th>
		
		</tr>
<?php
	foreach(result as $row){
		echo "<tr>";
		echo "<td>".$row["Name"]."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "<td>".$row["DepertmentName"]."</td>";
		echo "<td>".$row["DepertmentName"]."</td>";
		echo "</tr>";
	}
?>
	
	</table>