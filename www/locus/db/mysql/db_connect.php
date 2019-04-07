<?php
	include "db_credentials.php";

	class db_connect
	{
		var $dbname;

		function __construct($dbname){
			$this->dbname = $dbname;
		}

		function connect(){
			$dbc = new $db_credentials("techranger","techranger@1322");
			$username = $dbc->getuser();
			$password = $dbc->getpass();

			$conn = mysqli_connect("localhost", $username, $password);


			return $conn;
		}
	}
?>