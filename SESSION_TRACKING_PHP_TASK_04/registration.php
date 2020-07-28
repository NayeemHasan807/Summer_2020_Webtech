<?php
	session_start();
	if(isset($_POST['submit']))
	{
		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['userName'] != "" and $_POST['password'] != "" and $_POST['confirmPassword'] != "" and $_POST['day'] != "" and isset($_POST['gender']) and $_POST['month'] != "" and $_POST['year'] != "")
		{
			if($_POST['password'] == $_POST['confirmPassword'])
			{
				$_SESSION['userName']=$_POST['userName'];
				$_SESSION['password']=$_POST['password'];

				$_SESSION['name']=$_POST['name'];
				$_SESSION['email']=$_POST['email'];
				$_SESSION['gender']=$_POST['gender'];
				$_SESSION['day']=$_POST['day'];
				$_SESSION['month']=$_POST['month'];
				$_SESSION['year']=$_POST['year'];


				header('location:Login.html');
			}
			else
				echo "Password And Confirm Password Must Need To Be Same";
		}
		else
			echo "Please Fill All The Info First";
	}
	else
		header('location:publichome.html');

?>