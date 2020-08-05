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
	<title>Change Passwoed</title>
</head>
<body>
	<fieldset>
		<legend>Change Password</legend>
		<form action="changepassword.php" method="post">
			Current Password<br/>
			<input type="password" name="cpassword"><br/>
			New Password<br/>
			<input type="Password" name="npassword"><br/>
			Retype New Password<br/>
			<input type="Password" name="renpassword"><br/>
			<hr/>
			<input type="Submit" name="change" value="Change"> <a href="home.php">Home</a>

		</form>
	</fieldset>
</body>
</html>

<?php

	if(isset($_POST['change']))
	{
		if($_POST['cpassword']!="" and $_POST['npassword']!="" and $_POST['renpassword']!="")
		{
			if(!empty($_SESSION))
			{
				if($_SESSION['password']==$_POST['cpassword'])
				{
					if($_POST['npassword']==$_POST['renpassword'])
					{
						$handle=fopen('user.txt', 'r+');
						$data=fread($handle, filesize('user.txt'));
						$newdata=str_replace($_SESSION['id']."|".$_SESSION['password'],$_SESSION['id']."|".$_POST['npassword'], $data);
						file_put_contents('user.txt', $newdata);
						$_SESSION['password']=$_POST['npassword'];
						echo "Password changed!";
					}
					else
						echo "New Password And Retype New Password Must Need To Be Same!";

				}
				else
					echo "Current Password is Wrong!";

			}
			else
			{
				if($_COOKIE['password']==md5($_POST['cpassword']))
				{
					if($_POST['npassword']==$_POST['renpassword'])
					{
						$handle=fopen('user.txt', 'r+');
						$data=fread($handle, filesize('user.txt'));
						$newdata=str_replace($_COOKIE['id']."|".$_POST['cpassword'],$_COOKIE['id']."|".$_POST['npassword'], $data);
						file_put_contents('user.txt', $newdata);
						setcookie('password',md5($_POST['npassword']),time()+10000,'/');
						echo $_COOKIE['password'];
						echo "Password changed!";
					}
					else
						echo "New Password And Retype New Password Must Need To Be Same!";

				}
				else
					echo "Current Password is Wrong!";
			}
		}
		else
			echo "Fill All The Info First";

	}
?>