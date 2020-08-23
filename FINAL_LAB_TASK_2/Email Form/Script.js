function validate()
{
	var show = document.getElementById("show");
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
				return true;
			}
			else
			{
				show.innerHTML = "Must be a valid email address (i.e anything@example.com)";
				return false;
			}
		}
		else
		{
			show.innerHTML = "Must be a valid email address (i.e anything@example.com)";
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