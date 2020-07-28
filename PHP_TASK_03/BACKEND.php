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
				if($f=="com" or $f=="edu")
					echo "Email is valid";
				else
					echo "Email is invalid";
			}
			else
				echo "Email is invalid";

		}
		else
			echo "Email is invalid ";

		echo "</br>";

		if(isset($_POST['gender']))
		{
			echo "Gender is selected";
		}
		else
			echo "Gender in not selected";

		echo "</br>";

		if($_POST['day'] != "" and $_POST['day'] >='1' and $_POST['day'] <= '31' and $_POST['month'] != "" and $_POST['month'] >='1' and $_POST['month'] <= '12' and $_POST['year'] != "" and $_POST['year'] >='1900' and $_POST['year'] <= '2016'  )
			echo "DOB is valid";
		else
			echo "DOB is invalid";

		echo "</br>";

		if(isset($_POST['degree']))
		{
			echo "Degree is selected";
		}
		else
			echo "Degree in not selected";

		echo "</br>";

		if($_POST['Blood_Group']!="None")
		{
			echo "Blood group is selected";
		}
		else
			echo "Blood group in not selected";

		echo "</br>";

		if($_POST['user_id']!="" and $_POST['user_id']>=0)
			echo "User Id is valid";
		else
			echo "User Id is invalid";

		echo "</br>";

		if($_POST['photo']!="")
			echo "Photo is uploaded";
		else
			echo "Photo is not uploaded";

		echo "</br>";
	}
	print_r($_POST);
?>