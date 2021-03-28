<?php
	$db_server="localhost:8008";
	$db_user="root";
	$db_password="";
	$db_name="wt_sp21_l";
	
	function execute($query){
		global $db_server,$db_user,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
		 mysqli_query($conn,$query);
		
		
	}
	function get ($query){
		global $db_server,$db_user,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
		$result= mysqli_query($conn,$query);
		$data=[];
		if(mysqli_num_rows($result)>0){
			while($raw = mysqli_fetch_assoc($result)){
				$data[] = $raw;
			}
		}
		return $data;
		
		
	}
	
	?>
	