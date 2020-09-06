<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/createAuthor.php">Create New Author</a> |
	<a href="../views/all_author.php">Author List</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>