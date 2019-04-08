<?php
	include "../locus/db/mysql/db_connect.php";

	$con = new db_connect("hackathon");
	// $db = $con->connect();

	$query = "insert into test values(1,'Parth Singh')";

	// $res = $con->db_action($query);

	// if($res)
	// {
	// 	echo "Yes";
	// }
	// else
	// {
	// 	echo "No";
	// }


	if (mysqli_query($con, $query)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>