<?php
	class db_credentials
	{
		var $username;
		var $password;
		var $dbname;
		
		function __construct($username,$password,$dbname){
			$this->username = $username;
			$this->password = $password;
			$this->dbname = $dbname;
		}

		function getuser()
		{
			return $this->username;
		}

		function getpass()
		{
			return $this->password;
		}

		function getdbname()
		{
			return $this->dbname;
		}
	}
?>