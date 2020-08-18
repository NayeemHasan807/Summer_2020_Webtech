<?php
	require_once('../php/session_header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Create New Company Info</legend>
			<table>
				<tr>
					<td>Company id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Company name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>Profile description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
				<tr>
					<td>Company logo</td>
					<td><input type="text" name="company_logo"></td>
				</tr>
				<tr>
					<td>User account id</td>
					<td><input type="text" name="user account id"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>