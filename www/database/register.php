<?php
	include "../locus/db/mysql/db_connect.php";

	class registration
	{
		var $isconnect;
		var $db;
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

		function test($name)
		{
			if($this->isconnect)
			{
				$q = "select max(id) as id from reg_hackathon";
				$res = $this->db->execute($q);
				if(isset($res["p_id"]))
				{
					$id = 1;
					$this->msg = $id;
				}
				else
				{
					$this->msg = ++$id;
				}
				return $this->msg;
				exit;

				$q = "insert into test values(1,'parth')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function hackathon($college_name,$team_name,$team_leader_name,$program,$year,$member_count,$mobile,$email,$password,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_hackathon";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_hackathon(id,college_name,team_name,team_leader_name,program,year,member_count,mobile,email,password,other_members) values('$id','$college_name','$team_name','$team_leader_name','$program','$year','$member_count','$mobile','$email','$password','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function arudino($college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_arudino";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_arudino(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function counter_strike($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_counter_strike";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_counter_strike(id,college_name,team_name,team_leader_name,member_count,mobile,program,year,email,other_members) values('$id','$college_name','$team_name','$team_leader_name','$member_count','$mobile','$program','$year','$email','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function doodle($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_doodle";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_doodle(id,college_name,team_name,team_leader_name,member_count,mobile,program,year,email,other_members) values('$id','$college_name','$team_name','$team_leader_name','$member_count','$mobile','$program','$year','$email','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function ethical($college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_ethical";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}
				$q = "insert into reg_ethical(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function meme($college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_meme";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_meme(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function photography($college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_photography";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_photography(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function poster($college_name,$participant_name,$mobile,$program,$year,$email)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_poster";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_poster(id,college_name,participant_name,mobile,program,year,email) values('$id','$college_name','$participant_name','$mobile','$program','$year','$email')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function pubg($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_pubg";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_pubg(id,college_name,team_name,team_leader_name,member_count,mobile,program,year,email,other_members) values('$id','$college_name','$team_name','$team_leader_name','$member_count','$mobile','$program','$year','$email','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function tekken($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_tekken";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_tekken(id,college_name,team_name,team_leader_name,member_count,mobile,program,year,email,other_members) values('$id','$college_name','$team_name','$team_leader_name','$member_count','$mobile','$program','$year','$email','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}

		function treasure_hunt($college_name,$team_name,$team_leader_name,$program,$year,$member_count,$mobile,$email,$password,$other_members)
		{
			if($this->isconnect)
			{
				$q = "select max(id)+1 as id from reg_treasure_hunt";
				$res = $this->db->execute($q);
				if(!isset($res["id"]) || $res["id"] == "")
				{
					$id = 1;
				}
				else
				{
					$id = $res["id"];
				}

				$q = "insert into reg_treasure_hunt(id,college_name,team_name,team_leader_name,program,year,member_count,mobile,email,password,other_members) values('$id','$college_name','$team_name','$team_leader_name','$program','$year','$member_count','$mobile','$email','$password','$other_members')";

				$res = $this->db->execute($q);

				if($res)
				{
					$this->msg = "OK";
				}
				else
				{
					$this->msg = "ERROR";
				}
				return $res;
			}
		}
	}
?>