<?php
	
	$host	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "final_lab_exam";

	function dbConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpass;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

?>