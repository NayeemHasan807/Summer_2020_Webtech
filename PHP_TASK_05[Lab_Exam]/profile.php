<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:login.html');
		}
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			header('location:Login.html');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<table align="center" border="1">
		<tr>
			<td colspan="2" align="center">
				<h6>Profile</h6>
			</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>
				<?php
					if(!empty($_SESSION))
						echo $_SESSION['id'];
					else
						echo $_COOKIE['id'];
				?>
			</td>
		</tr>
		<tr>
			<td>NAME</td>
			<td>
				<?php
					if(!empty($_SESSION))
						echo $_SESSION['name'];
					else
						echo $_COOKIE['name'];
				?>
			</td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td>
				<?php
					if(!empty($_SESSION))
						echo $_SESSION['email'];
					else
						echo $_COOKIE['email'];
				?>
			</td>
		</tr>
		<tr>
			<td>USER TYPE</td>
			<td>
				<?php
					if(!empty($_SESSION))
						echo $_SESSION['usertype'];
					else
						echo $_COOKIE['usertype'];
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<a href="home.php">Go Home</a>
			</td>
		</tr>
		
	</table>
</head>
<body>

</body>
</html>
