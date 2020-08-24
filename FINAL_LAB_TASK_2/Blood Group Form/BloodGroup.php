<?php
	if (isset($_POST['submit'])) 
	{
		$bloodgroup = $_POST['bloodgroup'];
		echo "Form had been submitted<br/>";
		echo "Blood group is ".$bloodgroup;
	}
	else
		header('location:BloodGroup.html');
?>