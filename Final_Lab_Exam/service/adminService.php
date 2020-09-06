<?php
	require_once('../db/db.php');

	function validate($admin){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from admin where username='{$admin['username']}' and password='{$admin['password']}'";
		$result = mysqli_query($conn, $sql);
		$admin = mysqli_fetch_assoc($result);

		if(count($admin) > 0 ){
			return true;
		}else{
			return false;
		}
	}