<!DOCTYPE html><html>
<head>
	<title>Person Profile</title>
</head>
<body>
	<form method="post">
	    <table border="1" align="center" height="600px" width="600px">
			<tr>
				<td colspan="3" align="center" height="5" ><h1> PERSON PROFILE </h1> </td>
			    </tr>
			    <tr>
					<td height="5" width="30">Name</td>
		    		<td height="5" width="40"><input type="text" name="name"></td>
		    		<td height="5" width="15"></td>
		    </tr>
			<tr>
			   	<td height="5" width="30">Email</td>
			   	<td height="5" width="40"><input type="email" name="email"></td>
			   	<td height="5" width="15"></td>
		    </tr>
			<tr>
			    <td height="5" width="30">Gender</td>
				<td height="5" width="40">
				   	<input type="radio" name="gender">Male
				   	<input type="radio" name="gender">Female
				   	<input type="radio" name="gender">Other
				</td>
				<td height="5" width="15"></td>
		    </tr>
		    <tr>
			   	<td height="5" width="30">Date of Birth</td>
			   	<td height="5" width="40">
			   		<input type="text" name="day" size="2">/
			   		<input type="text" name="month" size="2">/
			   		<input type="text" name="year" size="4">
			   		(dd/mm/yyyy)
			   	</td>
			   	<td height="5" width="15"></td>
		    </tr>
		    <tr>
			    <td height="5" width="30">Blood Group</td>
				<td height="5" width="40">
				   	<select>
				   		<option>A+</option>
				   		<option>A-</option>
				   		<option>B+</option>
				   		<option>B-</option>
				   		<option>Ab+</option>
				   		<option>O+</option>
				   		<option>O-</option>
				   	</select>
				</td>
				<td height="5" width="15"></td>
		    </tr>
		    <tr>
			    <td height="5" width="30">Degree</td>
				<td height="5" width="40">
				   	<input type="checkbox" name="degree">SSC
				   	<input type="checkbox" name="degree">HSC
				   	<input type="checkbox" name="degree">BSc.
				   	<input type="checkbox" name="degree">MSc.
				</td>
				<td height="5" width="15"></td>
		    </tr>
		    <tr>
		    	<td height="5" width="30">Photo</td>
		    	<td colspan="2"><input type="file" name="photo">
		    </tr>
		    <tr>
		    	<td colspan="3" height="20"></td>
		    </tr>
		    <tr>
		    	<td colspan="3" height="20" align="right">
		    		<input type="Submit" name="submit" value="Submit" >
		    		<input type="Reset" name="reset" value="Reset" > 
		    	</td>
		    </tr>	
	    </table>
	</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		if($_POST['name'] !="" and str_word_count($_POST['name'])>=2)
		{
			$a=str_split($_POST['name']);
			//print_r($a);
			$decision="Name is valid";
			if($a['0']=='a' or $a['0']=='b'  or $a['0']=='c' or $a['0']=='d'  or $a['0']=='e' or $a['0']=='f'  or $a['0']=='g' or $a['0']=='h'  or $a['0']=='i' or $a['0']=='j'  or $a['0']=='k' or $a['0']=='l'  or $a['0']=='m' or $a['0']=='n'  or $a['0']=='o' or $a['0']=='p'  or $a['0']=='q' or $a['0']=='r'  or $a['0']=='s' or $a['0']=='t'  or $a['0']=='u' or $a['0']=='v'  or $a['0']=='w' or $a['0']=='x'  or $a['0']=='y' or $a['0']=='z'  or $a['0']=='A' or $a['0']=='B'  or $a['0']=='C' or $a['0']=='D'  or $a['0']=='E' or $a['0']=='F'  or $a['0']=='G' or $a['0']=='H'  or $a['0']=='I' or $a['0']=='J'  or $a['0']=='K' or $a['0']=='L'  or $a['0']=='M' or $a['0']=='N' or $a['0']=='O' or $a['0']=='P'  or $a['0']=='Q' or $a['0']=='R'  or $a['0']=='S' or $a['0']=='T'  or $a['0']=='U' or $a['0']=='V'  or $a['0']=='W' or $a['0']=='X'  or $a['0']=='Y' or $a['0']=='Z')
			{
				for($i=0 ; $i < count($a) ; $i++)
				{
					if($a[$i]=='a' or $a[$i]=='b'  or $a[$i]=='c' or $a[$i]=='d'  or $a[$i]=='e' or $a[$i]=='f'  or $a[$i]=='g' or $a[$i]=='h'  or $a[$i]=='i' or $a[$i]=='j'  or $a[$i]=='k' or $a[$i]=='l'  or $a[$i]=='m' or $a[$i]=='n'  or $a[$i]=='o' or $a[$i]=='p'  or $a[$i]=='q' or $a[$i]=='r'  or $a[$i]=='s' or $a[$i]=='t'  or $a[$i]=='u' or $a[$i]=='v'  or $a[$i]=='w' or $a[$i]=='x'  or $a[$i]=='y' or $a[$i]=='z'  or $a[$i]=='A' or $a[$i]=='B'  or $a[$i]=='C' or $a[$i]=='D'  or $a[$i]=='E' or $a[$i]=='F'  or $a[$i]=='G' or $a[$i]=='H'  or $a[$i]=='I' or $a[$i]=='J'  or $a[$i]=='K' or $a[$i]=='L'  or $a[$i]=='M' or $a[$i]=='N'  or $a[$i]=='O' or $a[$i]=='P'  or $a[$i]=='Q' or $a[$i]=='R'  or $a[$i]=='S' or $a[$i]=='T'  or $a[$i]=='U' or $a[$i]=='V'  or $a[$i]=='W' or $a[$i]=='X'  or $a[$i]=='Y' or $a[$i]=='Z' or $a[$i]=='.' or $a[$i]=='-' or $a[$i]==' ')
					{
						continue;
					}
					else
						$decision="Name is invalid";
				}
				echo $decision;
			}
			else
				echo "Name is invalid " ;
		}
		else
			echo "Name is invalid";

		echo "</br>";

		if($_POST['email'] !="")
		{
			$c=0;
			$b= str_split($_POST['email']);
			for($i=0; $i<count($b); $i++)
			{
				if($b[$i]=='@')
				{
					$c++;
				}
				else
					continue;
			}
			if($c==1)
			{
				$d=explode('@', $_POST['email']);
				$e=explode('.', $d[1]);
				$f;
				for($i=0; $i<count($e); $i++)
				{
					$f=$e[$i];
				}

				if($e=="com")
					echo "Email is valid";
				else
					echo "Email is invalid";
			}

		}
		else
			echo "Email is invalid ";

		echo "</be>";

	}

 ?>