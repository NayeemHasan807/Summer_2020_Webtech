<?php
	require_once('../db/db.php');

	function validate($author){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author where username='{$author['username']}' and password='{$author['password']}'";
		$result = mysqli_query($conn, $sql);
		$author = mysqli_fetch_assoc($result);

		if(count($author) > 0 ){
			return true;
		}else{
			return false;
		}
	}