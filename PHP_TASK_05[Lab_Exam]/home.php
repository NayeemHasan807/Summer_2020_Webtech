<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:login.html');
		}
		$usertype=$_SESSION['usertype'];
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			header('location:Login.html');
		}
		$usertype=$_COOKIE['usertype'];
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
						echo "<h1>Welcome ".$_SESSION['name']."!</h1><br/>";
						echo "<a href='profile.php'>Profile</a><br/>";
						echo "<a href='changepassword.php'>Change Password</a><br/>";
						echo "<a href='logout.php'>Logout</a><br/><br/>";
					}
					else
					{
						echo "<h1>Welcome ".$_COOKIE['name']."!</h1><br/>";
						echo "<a href='profile.php'>Profile</a><br/>";
						echo "<a href='changepassword.php'>Change Password</a><br/>";
						echo "<a href='viewusers.html'>Profile</a><br/>";
						echo "<a href='logout.php'>Logout</a><br/><br/>";
					}
				?> 
			</td>
		</tr>
		
	</table>
</head>
<body>

</body>
</html>
