function validate()
{
	var show = document.getElementById("show");
	var male = document.getElementById("male").checked;
	var female = document.getElementById("female").checked;
	var other = document.getElementById("other").checked;
	if( male == true || female == true || other == true)
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