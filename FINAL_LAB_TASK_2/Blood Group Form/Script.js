function validate()
{
	var show = document.getElementById("show");
	var bloodgroup = document.getElementById("bloodgroup").value;
	if( bloodgroup != "")
	{
		return true;
	}
	else
	{
		show.innerHTML = "Must be selected";
		return false;
	}

}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}