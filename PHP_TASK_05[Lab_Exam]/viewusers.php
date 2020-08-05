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
	<title>Users</title>
</head>
<body>
	<table align="center" border="1">
		<tr>
			<td colspan="4" align="center">
				<h6>Users</h6>
			</td>
		</tr>
		<?php
			$handle=fopen('user.txt', 'r');
			while(!feof($handle))
			{
				$users=fgets($handle);
				$user=explode('|', $users);
				if(!empty($user['1']))
					echo "<tr><td>".trim($user['0'])."</td><td>".trim($user['1'])."</td><td>".trim($user['2'])."</td><td>".trim($user['3'])."</td></tr>";
				else
					continue;
			}
		?>

		<tr>
			<td colspan="4" align="right">
				<a href="home.php">Go Home</a>
			</td>
		</tr>
		
	</table>

</body>
</html>
