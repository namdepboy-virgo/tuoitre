<div id="content">
	<?
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam="";
		}
		
		if($tam=="loaitin"){
			include("modules/loaitin/main.php");
		}else if($tam=="baiviet"){
			include("modules/baiviet/main.php");
		}else if($tam=="loaitincon"){
			include("modules/loaitincon/main.php");
		}
		else if($tam=="video"){
			include("modules/video/main.php");
		}
		else if($tam=="quangcao"){
			include("modules/quangcao/main.php");
		}
	?>
</div>