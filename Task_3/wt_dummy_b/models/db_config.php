<?php
	$db_server="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="dummy_1_sp21";
	
	function execute ($query){
		global $db_server,$db_user,$db_pass.$db_name;
		$conn = mysql_connect($db_server,$db_user,$db_pass,$db_name);
		mysql_connect($conn,$query);
	}
	
	function get($query){
		global $db_server,$db_user,$db_pass,$db_name;
		$conn = mysql_connect ($db_server,$db_user,$db_pass,$db_name);
		$result = mysql_query($conn,$query);
		$data=[];
		if(mysql_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;

?>