<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/adminService.php');


	//add author
	if(isset($_POST['create'])){
		$authorname			= $_POST['authorname'];
		$contactnumber 	= $_POST['contactnumber'];
		$username 	= $_POST['username'];
		$password		= $_POST['password'];

		if(empty($authorname) || empty($contactnumber) || empty($username) || empty($password)){
			header('location: ../views/createAuthor.php?error=null_error');
		}else{

			$author = [
				'authorname'=> $authorname,
				'contactnumber'=> $contactnumber,
				'username'=> $username,
				'password'=> $password
			];

			$status = insert($author);
			if($status){
				header('location: ../views/all_author.php?success=done');
			}else{
				header('location: ../views/createAuthor.php?error=db_error');
			}
		}
	}

	
?>