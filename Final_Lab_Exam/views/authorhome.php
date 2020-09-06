<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Author Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/writearticle.php">Write Article</a> |
	<a href="../views/all_article.php">Article List</a> |
	<a href="../php/logout.php">Logout</a> 
	<br/>
	<br/>
</body>
</html>