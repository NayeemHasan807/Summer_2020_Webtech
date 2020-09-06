<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<script type="text/javascript" src="../assets/js/authorsearch.js"></script>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/createAuthor.php">Create New Author</a> |
	<a href="../views/all_author.php">Author List</a> |
	<a href="../php/logout.php">Logout</a> 
	<br/>
	<br/>
	<input type="text" id="username" name="username" onkeyup="search()"> Search By Username
	<div id=result></div>
</body>
</html>