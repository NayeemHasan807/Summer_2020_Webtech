function validate()
{
	var show = document.getElementById("show");
	var day = document.getElementById("day").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	if( day != "" && month != "" && year != "")
	{
		if( day >= 1 && day <= 31 && month >= 1 && month <= 12 && year >= 1900 && year <= 2016 )
		{
			return true;
		}
		else
		{
			show.innerHTML = "Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";
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