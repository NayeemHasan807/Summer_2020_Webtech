<?php
	require_once('../php/session_header.php');
	require_once('../service/adminService.php');

	if (isset($_GET['username'])) {
		$author = getByUsername($_GET['username']);	
	}else{
		header('location: all_author.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Author</title>
</head>
<body>

	<form action="../php/adminController.php" method="post">
		<fieldset>
			<legend>Edit Author</legend>
			<table>
				<tr>
					<td>Authorname</td>
					<td><input type="text" name="authorname" value="<?=$author['authorname']?>"></td>
				</tr>
				<tr>
					<td>Contactnumber</td>
					<td><input type="text" name="contactnumber" value="<?=$author['contactnumber']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$author['password']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="username" value="<?=$author['username']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_author.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>