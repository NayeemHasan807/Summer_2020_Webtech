<?php
	session_start();
	session_destroy();
	setcookie('id',$_COOKIE['id'],time()-10000,'/');
	setcookie('password',md5($_COOKIE['password']),time()-10000,'/');
	setcookie('name',$_COOKIE['name'],time()-10000,'/');
	setcookie('email',$_COOKIE['email'],time()-10000,'/');
	setcookie('usertype',$_COOKIE['usertype'],time()-10000,'/');
	setcookie('status','set',time()-10000,'/');
	header('location:login.html');
?>
