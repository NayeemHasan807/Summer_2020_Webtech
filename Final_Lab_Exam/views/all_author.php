<?php
	require_once('../php/session_header.php');
	require_once('../service/adminService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Author List</title>
</head>
<body>

	<a href="adminhome.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Author list</h3>

	<table border="1">
		<tr>
			<td>Authorname</td>
			<td>Contactnumber</td>
			<td>Username</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

		<?php  
			$authors = getAllAuthor();
			for ($i=0; $i != count($authors); $i++) {  ?>
		<tr>
			<td><?=$authors[$i]['authorname']?></td>
			<td><?=$authors[$i]['contactnumber']?></td>
			<td><?=$authors[$i]['username']?></td>
			<td><?=$authors[$i]['password']?></td>
			<td>
				<a href="editauthor.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="deleteauthor.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>