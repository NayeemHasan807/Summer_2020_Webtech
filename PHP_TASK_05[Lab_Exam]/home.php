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
	<title>Home</title>
	<table align="center" border="1">
		<tr>
			<td colspan="5" align="center">
				<?php
					if(!empty($_SESSION))
					{
						if($_SESSION['usertype']=="User")
						{
							echo "<h1>Welcome ".$_SESSION['name']."!</h1><br/>";
							echo "<a href='profile.php'>Profile</a><br/>";
							echo "<a href='changepassword.php'>Change Password</a><br/>";
							echo "<a href='logout.php'>Logout</a><br/><br/>";
						}
						else
						{
							echo "<h1>Welcome ".$_SESSION['name']."!</h1><br/>";
							echo "<a href='profile.php'>Profile</a><br/>";
							echo "<a href='changepassword.php'>Change Password</a><br/>";
							echo "<a href='viewusers.php'>view Users</a><br/>";
							echo "<a href='logout.php'>Logout</a><br/><br/>";
						}
						
					}
					else
					{
						if($_COOKIE['usertype']=="Admin")
						{
							echo "<h1>Welcome ".$_COOKIE['name']."!</h1><br/>";
							echo "<a href='profile.php'>Profile</a><br/>";
							echo "<a href='changepassword.php'>Change Password</a><br/>";
							echo "<a href='viewusers.php'>View Users</a><br/>";
							echo "<a href='logout.php'>Logout</a><br/><br/>";
						}
						else
						{
							echo "<h1>Welcome ".$_COOKIE['name']."!</h1><br/>";
							echo "<a href='profile.php'>Profile</a><br/>";
							echo "<a href='changepassword.php'>Change Password</a><br/>";
							echo "<a href='logout.php'>Logout</a><br/><br/>";
						}
					}
				?> 
			</td>
		</tr>
		
	</table>
</head>
<body>

</body>
</html>
