<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

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

	function insert($company){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into company values('{$company['id']}', '{$company['company_name']}','{$company['profile_description']}', '{$company['industry']}', '{$company['company_website']}', '{$company['company_logo']}', '{$company['user_account_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($id){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "delete from `company` where id=$id";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}		
	}
?>