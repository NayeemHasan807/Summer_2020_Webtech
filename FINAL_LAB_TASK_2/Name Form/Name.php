<?php
	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		echo "Form had been submitted<br/>";
		echo "Name is ".$name;
	}
	else
		header('location:Name.html');
?>