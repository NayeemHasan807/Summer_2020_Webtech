<?php
	if (isset($_POST['submit'])) 
	{
		$email = $_POST['email'];
		echo "Form had been submitted<br/>";
		echo "Email is ".$email;
	}
	else
		header('location:Email.html');
?>