<?php
	if (isset($_POST['submit'])) 
	{
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		echo "Form had been submitted<br/>";
		echo "Date Of Birth is ".$day."/".$month."/".$year;
	}
	else
		header('location:DOB.html');
?>