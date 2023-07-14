<?php
error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studentdata";
//php me variable banane ke liye dollar lagana padta hai

	$con = mysqli_connect($servername,$username,$password,$dbname);

	if($con){ //echo matlb php ka cout
		// echo "Connection successful";
	}
	else{
		echo "Connection Failed".mysqli_connect_error();
	}
?>