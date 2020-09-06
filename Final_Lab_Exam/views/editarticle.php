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
	<title>Edit Article</title>
</head>
<body>

	<form action="../php/authorController.php" method="post">
		<fieldset>
			<legend>Edit Article</legend>
			<table>
				<tr>
					<td colspan="2">
						<textarea name="article" rows="10" cols="50">
							<?=$article['article']?>
						</textarea>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$article['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_article.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>