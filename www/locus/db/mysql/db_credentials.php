<?php
	class db_credentials
	{
		var $username;
		var $password;
		
		function __construct($username,$password){
			$this->username = $username;
			$this->password = $password;
		}

		function getuser()
		{
			return $this->username;
		}

		function getpass()
		{
			return $this->password;
		}
	}
?>