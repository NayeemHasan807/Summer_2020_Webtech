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

	function getAllAuthor(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author";
		$result = mysqli_query($conn, $sql);
		$authors = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($authors, $row);
		}

		return $authors;
	}

	function update($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($username){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "delete from `author` where username=$username";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}		
	}
