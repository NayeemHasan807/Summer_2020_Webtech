function search()
{
	var username = document.getElementById('username').value;
	if(username!="")
	{
		var xhttp = new XMLHttpRequest();
		xhttp.open('POST', '../php/adminController.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('username='+username);

		xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('result').innerHTML = this.responseText;
				}else{
					document.getElementById('result').innerHTML = "";
				}
				
			}	
		}
	}
	else
		document.getElementById('result').innerHTML = "";
	
}