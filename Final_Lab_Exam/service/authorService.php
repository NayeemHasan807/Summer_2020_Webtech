<?php
	require_once('../db/db.php');

	function getById($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from articles where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllArticleCount(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from articles";
		$result = mysqli_query($conn, $sql);
		$articles = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($articles, $row);
		}

		return count($articles);
	}

	function getAllArticleByUsername($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from articles where username='$username'";
		$result = mysqli_query($conn, $sql);
		$articles = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($articles, $row);
		}

		return $articles;
	}

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

	function insert($savearticle){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into articles values('{$savearticle['id']}','{$savearticle['username']}','{$savearticle['article']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($article){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update articles set article='{$article['article']}' where id='{$article['id']}'";

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

		$sql = "delete from articles where id='$id'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}		
	}