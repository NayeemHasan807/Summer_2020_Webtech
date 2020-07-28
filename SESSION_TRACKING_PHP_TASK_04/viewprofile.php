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
	<title>VIEWPROFILE</title>
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
						<li><a href="viewprofile.php">View Profile</a></li>
						<li><a href="editprofile.php">Edit Profile</a></li>
						<li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
				<td rowspan="6">
					<fieldset>
					    <legend><b>PROFILE</b></legend>
						<form>
							<br/>
							<table>
								<tr>
									<td width="10%">Name</td>
									<td>:</td>
									<td>
										<?php
											if(!empty($_SESSION))
											{
												echo $_SESSION['name'];
											}
											else
												echo $_COOKIE['name'];
										?>
									</td>
									<td width="40%" rowspan="7" align="center">
										<!---<?php
											if(!empty($_SESSION))
											{
												echo "<img height='128' width='128' src='".$$_SESSION['image']."'/>";
											}
											else
											{
												echo $_COOKIE['image'];
												echo "<img height='128' width='128' src='".$$_COOKIE['image']."'/>";	
											}
											 
										?>--->
					                    <img height='128' width='128' src="anime.png"/>
					                    <br/>
					                    <a href="changeprofilepicture.php">Change</a>
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>
										<?php
											if(!empty($_SESSION))
											{
												echo $_SESSION['email'];
											}
											else
												echo $_COOKIE['email'];
										?>
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>			
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>
										<?php
											if(!empty($_SESSION))
											{
												echo $_SESSION['gender'];
											}
											else
												echo $_COOKIE['gender'];
										?>
									</td>
								</tr>
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Date of Birth</td>
									<td>:</td>
									<td>
										<?php
											if(!empty($_SESSION))
											{
												echo $_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];
											}
											else
												echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year'];
										?>
									</td>
								</tr>
							</table>	
					        <hr/>
					        <a href="editprofile.php">Edit Profile</a>	
						</form>
					</fieldset> 
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
			<p align="center">Copyright © 2017 </p>
	</fieldset>	
</body>