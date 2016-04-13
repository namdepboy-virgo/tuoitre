<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("modules/loaitincon/them.php");
	}else if($ac=="sua"){
		include("modules/loaitincon/sua.php");
	}
	include("modules/loaitincon/lietke.php");
?>