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
				$confirm="notok";
				$user = fgets($file);
				$ssuser = explode('|', $user);
				if(trim($ssuser['0']) == $_POST['userid'] && trim($ssuser['1']) == $_POST['password'])
				{
					if(isset($_POST['rememberme']))
					{
						setcookie('id',trim($ssuser['0']),time()+10000,'/');
						setcookie('password',md5(trim($ssuser['1'])),time()+10000,'/');
						setcookie('name',trim($ssuser['2']),time()+10000,'/');
						setcookie('email',trim($ssuser['3']),time()+10000,'/');
						setcookie('usertype',trim($ssuser['4']),time()+10000,'/');
						setcookie('status','set',time()+10000,'/');
						header('location:home.php');
						$confirm="ok";

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
						$confirm="ok";

					}
				}
				else
					continue;

			}

			if($confirm=="notok")
			{
				echo "Wrong user id or password!";
			}

		}

	}
	else
	{
		header("location:login.html");
	}


?>