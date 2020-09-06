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
	<title>Delete author</title>
</head>
<body>

	<form action="../php/adminController.php" method="post">
		<fieldset>
			<legend>Confirmation</legend>
				Press Yes to delete this user and press No to go back <br/>
				<input type="hidden" name="username" value="<?=$author['username']?>">
				<input type="submit" name="yes" value="yes">
				<input type="submit" name="no" value="no">
		</fieldset>
	</form>
</body>
</html>