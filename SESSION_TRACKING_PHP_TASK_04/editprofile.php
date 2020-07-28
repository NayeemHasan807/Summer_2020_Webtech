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
	<title>EDITPROFILE</title>
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
						<form method="post">
							<br/>
							<table>
								<tr>
									<td width="10%">Name</td>
									<td>:</td>
									<td>
										<input type="text" name="name">
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>
										<input type="text" name="email">
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>			
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>
										<input name="gender" type="radio" value="Male">Male
										<input name="gender" type="radio" value="Female">Female
										<input name="gender" type="radio" value="Other">Other
									</td>
								</tr>
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Date of Birth</td>
									<td>:</td>
									<td>
										<input type="text" name="dob"><br/>
										dd/mm/yyyy
									</td>
								</tr>
							</table>	
					        <hr/>
								<input type="submit" value="Submit" name="submit">
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
<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_SESSION))
		{
			echo "sumaiya";
			$_SESSION['name']=$_POST['name'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['gender']=$_POST['gender'];
			$vhag_kora_uchit=explode('/', $_POST['dob']);
			$_SESSION['day']=$vhag_kora_uchit['0'];
			$_SESSION['month']=$vhag_kora_uchit['1'];
			$_SESSION['year']=$vhag_kora_uchit['2'];
		}
		else
		{
			setcookie('name',$_POST['name'],time()+36000,'/');
			setcookie('email',$_POST['email'],time()+36000,'/');
			setcookie('gender',$_POST['gender'],time()+36000,'/');
			$vhag_kora_uchit=explode('/', $_POST['dob']);
			setcookie('day',$vhag_kora_uchit['0'],time()+36000,'/');
			setcookie('month',$vhag_kora_uchit['1'],time()+36000,'/');
			setcookie('year',$vhag_kora_uchit['2'],time()+36000,'/');	
		}
	}
	
?>