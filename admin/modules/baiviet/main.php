<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("modules/baiviet/them.php");
	}else if($ac=="sua"){
		include("modules/baiviet/sua.php");
	}
	include("modules/baiviet/lietke.php");
?>