function validate()
{
	var show = document.getElementById("show");
	var check1 = document.getElementById("male").checked;
	var check2 = document.getElementById("female").checked;
	var check3 = document.getElementById("other").checked;
	if( check1 == true || check2 == true || check3 == true)
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