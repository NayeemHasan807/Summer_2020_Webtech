<?php
	require_once('../php/session_header.php');
	require_once('../service/authorService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
</head>
<body>

	<a href="authorhome.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Author list</h3>

	<table border="1">
		<tr>
			<td>Username</td>
			<td>Articles</td>
			<td>Action</td>
		</tr>

		<?php  
			$articles = getAllArticleByUsername($_SESSION['username']);
			for ($i=0; $i != count($articles); $i++) {  ?>
		<tr>
			<td><?=$articles[$i]['username']?></td>
			<td><?=$articles[$i]['article']?></td>
			<td>
				<a href="editarticle.php?id=<?=$articles[$i]['id']?>">Edit</a> |
				<a href="deletearticle.php?id=<?=$articles[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>