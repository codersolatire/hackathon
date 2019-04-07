<?php
	$url = $_SERVER['REQUEST_URI'];
	$url = explode("?",$url);
    $url = $url[0];

    if($url=="/")
    {
        $url="/main";
    }
    if($url!="")
    {
        $fileName = "interface".$url;
        include "$fileName.php";
    }
?>
