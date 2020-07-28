<?php
	session_start();
	session_destroy();

	setcookie('userName',$_SESSION['userName'],time()-36000,'/');
	setcookie('password',md5($_SESSION['password']),time()-36000,'/');
	setcookie('name',$_SESSION['name'],time()-36000,'/');
	setcookie('email',$_SESSION['email'],time()-36000,'/');
	setcookie('gender',$_SESSION['gender'],time()-36000,'/');
	setcookie('day',$_SESSION['day'],time()-36000,'/');
	setcookie('month',$_SESSION['month'],time()-36000,'/');
	setcookie('year',$_SESSION['year'],time()-36000,'/');
	setcookie('status',"set",time()-36000,'/');
	header('location:publichome.html');

?>