<?php
	$servername = "localhost";
	$username = "techranger";
	$password = "techranger@1322";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "Connected successfully";
	}

	//phpinfo();


	// include "db_connect.php";

	// $con = new db_connect("hackathon");

	// if($con)
	// {
	// 	echo "Yes";
	// }
	// else
	// {
	// 	echo "No";
	// }
?>