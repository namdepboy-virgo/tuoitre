<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("modules/video/them.php");
	}else if($ac=="sua"){
		include("modules/video/sua.php");
	}
	include("modules/video/lietke.php");
?>