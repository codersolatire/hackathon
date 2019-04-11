<?php
	include "db_credentials.php";

	class db_connect
	{
		var $conn;
		var $res;

		function __construct()
		{
			$this->dbname = $dbname;

			$dbc = new db_credentials("techranger","techranger@1322","hackathon");
			$username = $dbc->getuser();
			$password = $dbc->getpass();
			$dbname = $dbc->getdbname();

			$this->conn = mysqli_connect("localhost", $username, $password, $dbname);

			return $this->conn;
		}

		function execute($query)
		{
			if(mysqli_query($this->conn, $query))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>