<?php
	require_once 'models/db_config.php';
	
	if (isset($_POST[add category])){
		insertCategory($_POST["name"]);
	}
	
	function insertCategory($name){
		$query="insert into categories values (NULL,'$name')";
		execute($query);
		 header("Location: allcategories.php");
	}
	
	function getCategory($id){
		$query="insert into categories where id=$id";
		$result = get ($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false
	
	}
	sunction getAllCategories(){
		$query = "select * from categories";
		$result = get($query);
		return $result;
	}
	

?>