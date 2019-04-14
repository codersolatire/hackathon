<?php
	include "../database/register.php";

	$reg = new registration();

	$res = $reg->test('1','college_name');

	if($res)
	{
		echo $reg->msg;
	}
	else
	{
		echo "False".$reg->msg;
	}

?>