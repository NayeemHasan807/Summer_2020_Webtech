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

	function insert($author){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into author values('{$author['authorname']}', '{$author['contactnumber']}','{$author['username']}', '{$author['password']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}