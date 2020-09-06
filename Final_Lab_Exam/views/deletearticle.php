<?php
	require_once('../php/session_header.php');
	require_once('../service/authorService.php');

	if (isset($_GET['id'])) {
		$article = getById($_GET['id']);	
	}else{
		header('location: all_article.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete article</title>
</head>
<body>

	<form action="../php/authorController.php" method="post">
		<fieldset>
			<legend>Confirmation</legend>
				Press Yes to delete this user and press No to go back <br/>
				<input type="hidden" name="id" value="<?=$article['id']?>">
				<input type="submit" name="yes" value="yes">
				<input type="submit" name="no" value="no">
		</fieldset>
	</form>
</body>
</html>