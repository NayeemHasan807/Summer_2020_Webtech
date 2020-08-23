<?php
	if (isset($_POST['submit'])) 
	{
		$gender = $_POST['gender'];
		echo "Form had been submitted<br/>";
		echo "Gender is ".$gender;
	}
	else
		header('location:Gender.html');
?>