<?php
	include "../locus/db/mysql/db_connect.php";

	class registration
	{
		var $isconnect;
		var $db;
		var $isexecuted;
		var $msg;

		function __construct()
		{
			$this->db = new db_connect();
			if($this->db)
			{
				$this->isconnect = true;
				return $this->isconnect;
			}
			else
			{
				$this->isconnect = false;
				return $this->isconnect;
			}
		}

		function hackathon($id,$college_name,$team_name,$team_leader_name,$program,$year,$member_count,$mobile,$email,$password,$other_members)
		{
			if($this->isconnect)
			{
			$q = "insert into reg_hackathon(id,college_name,team_name,team_leader_name,program,year,member_count,mobile,email,password,other_members) values('$id','$college_name','$team_name','$team_leader_name','$program','$year','$member_count','$mobile','$email','$password','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "Successfully Inserted";
					return true;
				}
				else
				{
					$this->msg = "Error";
					return false;
				}
			}
		}

		function arudino($id,$college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
			$q = "insert into reg_arudino(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "Successfully Inserted";
					return true;
				}
				else
				{
					$this->msg = "Error";
					return false;
				}
			}
		}
	}
?>