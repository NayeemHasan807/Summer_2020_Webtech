<?php
	session_start();

	if(isset($_POST['submit']))
	{
		if(isset($_POST['rememberMe']) and $_POST['userName'] != "" and $_POST['password'] !="")
		{
			if(isset($_COOKIE['userName']) and isset($_COOKIE['password']))
			{
				if($_COOKIE['userName']==$_POST['userName'] and $_COOKIE['password']==md5($_POST['password']))
				{
					header('location:loggedindashboard.php');
				}
				else
					echo "Invalid UserName Or Password!";
			}
			elseif(!empty($_SESSION['userName']) and !empty($_SESSION['password']))
			{
				if($_SESSION['userName']==$_POST['userName'] and $_SESSION['password']==$_POST[password])
				{
					setcookie('userName',$_SESSION['userName'],time()+36000,'/');
					setcookie('password',md5($_SESSION['password']),time()+36000,'/');
					setcookie('name',$_SESSION['name'],time()+36000,'/');
					setcookie('email',$_SESSION['email'],time()+36000,'/');
					setcookie('gender',$_SESSION['gender'],time()+36000,'/');
					setcookie('day',$_SESSION['day'],time()+36000,'/');
					setcookie('month',$_SESSION['month'],time()+36000,'/');
					setcookie('year',$_SESSION['year'],time()+36000,'/');
					setcookie('status',"set",time()+36000,'/');
					session_destroy();
					header('location:loggedindashboard.php');
				}
				else
					echo "Invalid Username Or Password!";
		    }
			else
				echo "Invalid Username Or Password!";
		}
		elseif($_POST['userName'] != "" and $_POST['password'] !="")
		{
			if(!empty($_SESSION))
			{
				if($_SESSION['userName']==$_POST['userName'] and $_SESSION['password']==$_POST['password'])
				{
					$_SESSION['status'] = "set";
					header('location:loggedindashboard.php');
				}
				else
					echo "Invalid Username Or Password!";
			}
			else
				echo "Register To Login!";
			
		}
		else
			echo "Use Your UserName And Password To Login!";

	}
	else
		header('location:publichome.html');
?>