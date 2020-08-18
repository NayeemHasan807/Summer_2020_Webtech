<?php
	require_once('../db/db.php');

	function getAllCompany(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company";
		$result = mysqli_query($conn, $sql);
		$companies = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($companies, $row);
		}

		return $companies;
	}
?>