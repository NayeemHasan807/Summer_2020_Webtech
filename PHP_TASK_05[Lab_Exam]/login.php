<?php
	session_start();

	if(isset($_POST['login']))
	{
		if(empty($_POST['userid']) || empty($_POST['password']))
		{
			echo "null submission";

		}
		else
		{
			
			$file = fopen('user.txt', 'r');

			while(!feof($file))
			{
				$user = fgets($file);
				$ssuser = explode('|', $user);
				if(trim($ssuser['0']) == $_POST['userid'] && trim($ssuser['1']) == $_POST['password'])
				{
					if(isset($_POST['rememberme']))
					{
						setcookie('id',$ssuser['0'],time()+10000,'/');
						setcookie('password',md5($ssuser['1']),time()+10000,'/');
						setcookie('name',$ssuser['2'],time()+10000,'/');
						setcookie('email',$ssuser['3'],time()+10000,'/');
						setcookie('usertype',$ssuser['4'],time()+10000,'/');
						setcookie('status','set',time()+10000,'/');
						header('location:home.php');

					}
					else
					{
						$_SESSION['id']= trim($ssuser['0']);
						$_SESSION['password']= trim($ssuser['1']);
						$_SESSION['name']= trim($ssuser['2']);
						$_SESSION['email']= trim($ssuser['3']);
						$_SESSION['usertype'] = trim($ssuser['4']);
						$_SESSION['status']  = "set";
						header('location:home.php');

					}
				}
				else
					continue;

			}
		}

	}
	else
	{
		header("location:login.html");
	}


?>