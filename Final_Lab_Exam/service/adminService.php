<?php
	require_once('../db/db.php');

	function getByUsername($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
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

	function update($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update author set authorname='{$author['authorname']}', contactnumber='{$author['contactnumber']}', password='{$author['password']}' where username='{$author['username']}'";

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

		$sql = "delete from author where username='$username'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}		
	}

	function search($username)
	{
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql= "select * from author where username like '%{$username}%'";

		$result = mysqli_query($conn, $sql);

		$data = "<table border=1> 
					<tr>
						<td>Authorname</td>
						<td>Contactnumber</td>
						<td>Username</td>
					</tr>";

		while ($row = mysqli_fetch_assoc($result)) {
				$data .= "<tr>
								<td>{$row['authorname']}</td>
								<td>{$row['contactnumber']}</td>
								<td>{$row['username']}</td>
						</tr>";
		}

		$data .= "</table>";

		echo $data;

	}
