<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error')
		{
			echo "Something went wrong...please try again";
		}
		elseif($_GET['error'] == 'id_already_exist')
		{
			echo "this id already exist";
		}
		else
			echo "null submission";	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form id="form">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Userid</td>
					<td><input type="text" id="id" name="id"></td>
					<td></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" onkeyup="checkemail()"></td>
					<td id="show1"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" id="submit" name="submit" value="submit" onclick="submitvalue()">
						<a href="../views/login.php" id="login" style="display: none">Login</a>
					</td>
					<td id="show2"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		
		var decision = false;
		var show1 = document.getElementById("show1");
		function checkemail()
		{
			var email = document.getElementById("email").value;
			if( email != "")
			{
				var count=0;
				for( i=0 ; i < email.length ; i++)
				{
					if(email[i]=='@')
					{
						count++;
					}
					else
						continue;
				}
				if(count==1)
				{
					var addret = email.split("@");
					var dot = addret[1].split(".");
					var last;
					for( i=0 ; i < dot.length ; i++)
					{
						last = dot[i];
					}
					if( last == "com" || last == "edu")
					{
						var xhttp = new XMLHttpRequest();
						//xhttp.open('GET', '../php/regCheck.php?email='+email+"'", true);
						xhttp.open('POST', '../php/regCheck.php', true);
						xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						xhttp.send('email='+email);

						xhttp.onreadystatechange = function ()
						{
							if(this.readyState == 4 && this.status == 200)
							{
								if(this.responseText != ""){
									document.getElementById('show1').innerHTML = this.responseText;
								}
								else{
									document.getElementById('show1').innerHTML = "";
									decision = true;
								}
								
							}	
						}

					}
					else
					{
						show1.innerHTML = "1Must be a valid email address (i.e anything@example.com)";
					}
				}
				else
				{
					show1.innerHTML = "2Must be a valid email address (i.e anything@example.com)";
				}
			}
			else
			{
				show1.innerHTML = "Cannot be empty";
			}
		}

		function submitvalue()
		{
			var show2 = document.getElementById("show2");
			if(decision == true)
			{
				var id = document.getElementById('id').value;
				var username = document.getElementById('username').value;
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				var submit = document.getElementById('submit').value;
				if(id!="" && username!="" && password!="")
				{
					var xhttp = new XMLHttpRequest();
					xhttp.open('POST', '../php/regCheck.php', true);
					xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
					xhttp.send('id='+id+'&username='+username+'&password='+password+'&email='+email+'&submit='+submit);

					xhttp.onreadystatechange = function ()
					{
						if(this.readyState == 4 && this.status == 200)
						{
							if(this.responseText != "")
							{
								document.getElementById('form').reset();
								document.getElementById('login').style.display = 'inline'
							}
							else
							{
								document.getElementById('searchdata').innerHTML = "";
							}	
						}	
					}
				}
				else
				{
					show2.innerHTML = "please fill all the information correctly";
				}
			}
			else
			{
				show2.innerHTML = "please fill all the information correctly";
			}
			
		}
	</script>
</body>
</html>