function validate()
{
	var show = document.getElementById("show");
	var gender = document.getElementById("gender").checked;
	if( gender == true)
	{
		return true;
	}
	else
	{
		show.innerHTML = "At least one of them has to be selected";
		return false;
	}

}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}