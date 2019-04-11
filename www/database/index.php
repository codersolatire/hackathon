<?php
	include "../database/register.php";

	$reg = new registration();

	$res = $reg->hackathon('1','college_name','team_name','team_leader_name','program','2019','2','mobile','email','password','other_members');

	if($res)
	{
		echo $reg->msg;
	}
	else
	{
		echo "False".$reg->msg;
	}

?>