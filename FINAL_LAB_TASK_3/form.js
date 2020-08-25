function validate()
{
	var show1 = document.getElementById("show1");
	var a = document.getElementById("name").value;
	if( a != "")
	{
		var word = a.split(" ");
		var count = word.length;
		if ( count >= 2) 
		{
			var decision = "valid";
			if(a[0]=='a' || a[0]=='b'  || a[0]=='c' || a[0]=='d'  || a[0]=='e' || a[0]=='f'  || 
				a[0]=='g' || a[0]=='h'  || a[0]=='i' || a[0]=='j'  || a[0]=='k' || a[0]=='l'  || 
				a[0]=='m' || a[0]=='n'  || a[0]=='o' || a[0]=='p'  || a[0]=='q' || a[0]=='r'  || 
				a[0]=='s' || a[0]=='t'  || a[0]=='u' || a[0]=='v'  || a[0]=='w' || a[0]=='x'  || 
				a[0]=='y' || a[0]=='z'  || a[0]=='A' || a[0]=='B'  || a[0]=='C' || a[0]=='D'  || 
				a[0]=='E' || a[0]=='F'  || a[0]=='G' || a[0]=='H'  || a[0]=='I' || a[0]=='J'  || 
				a[0]=='K' || a[0]=='L'  || a[0]=='M' || a[0]=='N' || a[0]=='O' || a[0]=='P'  || 
				a[0]=='Q' || a[0]=='R'  || a[0]=='S' || a[0]=='T'  || a[0]=='U' || a[0]=='V'  || 
				a[0]=='W' || a[0]=='X'  || a[0]=='Y' || a[0]=='Z')
			{
				for(i=0 ; i < a.length ; i++)
				{
					if(a[i]=='a' || a[i]=='b'  || a[i]=='c' || a[i]=='d'  || a[i]=='e' || a[i]=='f'  || 
						a[i]=='g' || a[i]=='h'  || a[i]=='i' || a[i]=='j'  || a[i]=='k' || a[i]=='l'  || 
						a[i]=='m' || a[i]=='n'  || a[i]=='o' || a[i]=='p'  || a[i]=='q' || a[i]=='r'  || 
						a[i]=='s' || a[i]=='t'  || a[i]=='u' || a[i]=='v'  || a[i]=='w' || a[i]=='x'  || 
						a[i]=='y' || a[i]=='z'  || a[i]=='A' || a[i]=='B'  || a[i]=='C' || a[i]=='D'  || 
						a[i]=='E' || a[i]=='F'  || a[i]=='G' || a[i]=='H'  || a[i]=='I' || a[i]=='J'  || 
						a[i]=='K' || a[i]=='L'  || a[i]=='M' || a[i]=='N' || a[i]=='O' || a[i]=='P'  || 
						a[i]=='Q' || a[i]=='R'  || a[i]=='S' || a[i]=='T'  || a[i]=='U' || a[i]=='V'  || 
						a[i]=='W' || a[i]=='X'  || a[i]=='Y' || a[i]=='Z' || a[i]=='-' || a[i]=='.' || a[i]==' ')					
					{
						continue;
					}
					else
						decision="invalid";
				}

				if(decision=="valid")
				{
					var show2 = document.getElementById("show2");
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
								var show3 = document.getElementById("show3");
								var male = document.getElementById("male").checked;
								var female = document.getElementById("female").checked;
								var other = document.getElementById("other").checked;
								if( male == true || female == true || other == true)
								{
									var show4 = document.getElementById("show4");
									var day = document.getElementById("day").value;
									var month = document.getElementById("month").value;
									var year = document.getElementById("year").value;
									if( day != "" && month != "" && year != "")
									{
										if( day >= 1 && day <= 31 && month >= 1 && month <= 12 && year >= 1900 && year <= 2016 )
										{
											var show5 = document.getElementById("show5");
											var bloodgroup = document.getElementById("bloodgroup").value;
											if( bloodgroup != "")
											{
												return true;
											}
											else
											{
												show5.innerHTML = "Must be selected";
												return false;
											}
										}
										else
										{
											show4.innerHTML = "Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";
											return false;		
										}
									}
									else
									{
										show4.innerHTML = "Cannot be empty";
										return false;
									}
								}
								else
								{
									show3.innerHTML = "At least one of them has to be selected";
									return false;
								}
							}
							else
							{
								show2.innerHTML = "Must be a valid email address (i.e anything@example.com)";
								return false;
							}
						}
						else
						{
							show2.innerHTML = "Must be a valid email address (i.e anything@example.com)";
							return false;
						}

					}
					else
					{
						show2.innerHTML = "Cannot be empty";
						return false;
					}
				}
				else
				{
					show1.innerHTML = "Can contain a-z or A-Z or dot(.) or dash(-)";
					return false;	
				}

			}
			else
			{
				show1.innerHTML = "Must start with a letter";
				return false;
			}
		}
		else
		{
			show1.innerHTML = "Contains at least two words";
			return false;
		}	

	}
	else
	{
		show1.innerHTML = "Cannot be empty";
		return false;
	}

}

function clicks1()
{
	var show = document.getElementById("show1");
	show.innerHTML = "";
}

function clicks2()
{
	var show = document.getElementById("show2");
	show.innerHTML = "";
}

function clicks3()
{
	var show = document.getElementById("show3");
	show.innerHTML = "";
}

function clicks4()
{
	var show = document.getElementById("show4");
	show.innerHTML = "";
}

function clicks5()
{
	var show = document.getElementById("show5");
	show.innerHTML = "";
}