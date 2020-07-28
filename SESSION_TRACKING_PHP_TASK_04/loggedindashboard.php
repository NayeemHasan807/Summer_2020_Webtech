<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:Login.html');
		}
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			echo $_COOKIE['status'];
			header('location:Login.html');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
</head>
<body>
	<fieldset>
		<p>X-Company</p>
		<?php
			if(!empty($_SESSION))
			{
				echo "<p align='right'>Logged in as <a href='profile.html'>".$_SESSION['userName']."</a>|<a href='logout.php'>Logout</a></p>";
			}
			else
				echo "<p align='right'>Logged in as <a href='profile.html'>".$_COOKIE['userName']."</a>|<a href='logout.php'>Logout</a></p>";
		?>
	</fieldset>
	<fieldset>
		<table width="100%" border="1">
			<tr>
				<td rowspan="6" width="30%">
					Account
					<hr/>
					<ul>
						<li><a href="loggedindashboard.php">Dashboard</a></li>
						<li><a href="">View Profile</a></li>
						<li><a href="">Edit Profile</a></li>
						<li><a href="">Change Profile Picture</a></li>
						<li><a href="">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
				<td rowspan="6">
					<?php
						if(!empty($_SESSION))
						{
							echo "Welcome ".$_SESSION['userName'];
						}
						else
							echo "Welcome ".$_COOKIE['userName'];
					?> 
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
			<p align="center">Copyright © 2017 </p>
	</fieldset>	
</body>