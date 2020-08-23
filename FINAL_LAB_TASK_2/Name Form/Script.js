function validate()
{
	var show = document.getElementById("show");
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

					if(decision=="valid")
					{
						return true;
					}
					else
					{
						show.innerHTML = "Can contain a-z or A-Z or dot(.) or dash(-)";
						return false;	
					}
				}

			}
			else
			{
				show.innerHTML = "Must start with a letter";
				return false;
			}
		}
		else
		{
			show.innerHTML = "Contains at least two words";
			return false;
		}	

	}
	else
	{
		show.innerHTML = "Cannot be empty";
		return false;
	}

}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}