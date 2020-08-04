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
			$data = fread($file, filesize('user.txt'));
			$user = explode('/r/n', $data);


			while(!feof($user))
			{
				$suser = fgets($user);
				$ssuser = explode('|', $suser);
				if(trim($ssuser['0']) == $_POST['userid'] && trim($ssuser['1']) == $_POST['password'])
				{
					$_SESSION['usertype'] = trim($ssuser['4']);
					$_SESSION['status']  = "Ok";
					echo "welcome";
					//header('location:home.php');
				}
				else
					continue;

			}
		}

	}
	else
	{
		echo "bash";
		//header("location:login.html");
	}


?>