<?php
	if(isset($_POST['submit']))
	{
		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['userName'] != "" and $_POST['password'] != "" and $_POST['confirmPassword'] != "" and $_POST['day'] != "" and isset($_POST['gender']) and $_POST['month'] != "" and $_POST['year'] != "")
		{
			if($_POST['password'] == $_POST['confirmPassword'])
			{
				$_SESSION['userName']=$_POST['userName'];
				$_SESSION['password']=$_POST['password'];
				print_r($_POST);
				header('location:Login.html');
			}
			else
				header('location:registration.html');
		}
		else
			header('location:registration.html');
	}
	else
		header('location:publichome.html');

?>