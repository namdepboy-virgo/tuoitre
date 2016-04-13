<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("modules/quangcao/them.php");
	}else if($ac=="sua"){
		include("modules/quangcao/sua.php");
	}
	include("modules/quangcao/lietke.php");
?>