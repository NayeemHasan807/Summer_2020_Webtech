<?php
	session_start();

	if(isset($_POST['register']))
	{
		if(empty($_POST['id']) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['usertype']))
		{
			echo "null submission";
		}
		else 
		{
			if($_POST['password'] == $_POST['cpassword'])
			{
				$file = fopen('user.txt', 'a');
				fwrite($file, $_POST['id'].'|'.$_POST['password'].'|'.$_POST['name'].'|'.$_POST['email'].'|'.$_POST['usertype']."/r/n");
				fclose($file);

				header('location:login.html');
			}
			else
			{
				echo "password & Confirm password must need to be same!";
			}
		}

	}
	else
	{
		header("location:registration.html");
	}

?>