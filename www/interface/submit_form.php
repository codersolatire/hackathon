<?php
	include "../database/register.php";

	$reg = new registration();
	$a = array();

	$formname = $_POST['formname'];
	$college_name = $_POST['clgName'];
	$participant_name = $_POST['participant_name'];
	$team_name = $_POST['team_name'];
	$team_leader_name = $_POST['team_leader_name'];
	$program = $_POST['program'];
	$year = $_POST['year'];
	$member_count = $_POST['team_member'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$other_members = $_POST['other_members'];

	if($formname == "hackathon")
	{
		$res = $reg->hackathon($college_name,$team_name,$team_leader_name,$program,$year,$member_count,$mobile,$email,$password,$other_members);
	}

	if($formname == "arduino")
	{
		$res = $reg->arudino($college_name,$participant_name,$mobile,$program,$year,$email);
	}

	if($formname == "counter_strike")
	{
		$res = $reg->counter_strike($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members);
	}

	if($formname == "doodle")
	{
		$res = $reg->doodle($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members);
	}

	if($formname == "ethical")
	{
		$res = $reg->ethical($college_name,$participant_name,$mobile,$program,$year,$email);
	}

	if($formname == "meme")
	{
		$res = $reg->meme($college_name,$participant_name,$mobile,$program,$year,$email);
	}

	if($formname == "photography")
	{
		$res = $reg->photography($college_name,$participant_name,$mobile,$program,$year,$email);
	}

	if($formname == "poster")
	{
		$res = $reg->poster($college_name,$participant_name,$mobile,$program,$year,$email);
	}

	if($formname == "pubg")
	{
		$res = $reg->pubg($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members);
	}

	if($formname == "tekken")
	{
		$res = $reg->tekken($college_name,$team_name,$team_leader_name,$member_count,$mobile,$program,$year,$email,$other_members);
	}

	if($formname == "treausre_hunt")
	{
		$res = $reg->treasure_hunt($college_name,$team_name,$team_leader_name,$program,$year,$member_count,$mobile,$email,$password,$other_members);
	}

	if($res)
	{
		$a["type"] = "OK";
		$a["text"] = "Successfully Inserted..";
	}
	else
	{
		$a["type"] = "ERROR";
		$a["text"] = "Database Error..";
	}

	echo json_encode($a);
	exit;
?>