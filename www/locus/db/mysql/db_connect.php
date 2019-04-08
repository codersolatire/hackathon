<?php
	include "db_credentials.php";

	class db_connect
	{
		var $dbname;
		var $conn;

		function __construct($dbname){
			$this->dbname = $dbname;
		}

		function connect()
		{
			$dbc = new db_credentials("techranger","techranger@1322");
			$username = $dbc->getuser();
			$password = $dbc->getpass();

			$this->conn = mysqli_connect("localhost", $username, $password, $this->dbname);

			return $this->conn;
		}

		function choosedb()
		{
			mysql_select_db($dbname);
		}

		function db_action($query)
		{
			mysqli_query($this->conn, $query);
		}
	}
?>