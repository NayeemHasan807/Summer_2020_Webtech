<?php
	require_once('../php/session_header.php');

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
		elseif ($_GET['error'] == 'null_error') {
			echo "null submission...please try again";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Write Article</title>
</head>
<body>

	<form action="../php/authorController.php" method="post">
		<fieldset>
			<legend>Create New Article</legend>
			<table>
				<tr>
					<td colspan="2">
						<textarea name="article" rows="10" cols="50" >
						</textarea>>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="username" value="<?=$_SESSION['username']?>">
						<input type="submit" name="save" value="Save"> 
						<a href="authorhome.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>