<?php
	if (isset($_POST['submit'])) 
	{
		$userid = $_POST['userid'];
		echo "Form had been submitted<br/>";
		echo "User id is ".$userid."<br/>";
		$picture = $_FILES['picture'];
		echo "Picture name is ".$picture['name']."<br/>";
	}
	else
		header('location:ProfilePicture.html');
?>