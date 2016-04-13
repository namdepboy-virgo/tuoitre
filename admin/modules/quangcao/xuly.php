<?
	include("../config.php");	
	
	$id=$_GET["id"];
	$tenquangcao=$_POST["tenanh"];
	$loaianh=$_POST["loaianh"];
	$duongdan=$_POST["duongdan"];
	$tenanh = $_FILES["anhminhhoa"]["name"];
			
	if(isset($_POST["them"])){
		
		if($tenanh!=""){
			
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);
			$dich=substr($dich,9);
		}
		$sql="INSERT INTO quangcao(duongdan, anhminhhoa, loaianh, tenanh) VALUES('$duongdan', '$dich', '$loaianh', '$tenquangcao')";
		
		mysql_query($sql);
		header("location: ../../index.php?quanly=quangcao&ac=them");			
	}
	
	
	else if(isset($_POST["sua"])){
		if($tenanh!=""){
			
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);			
			$dich=substr($dich,9);
			
			//---------xoa anh co roi
			$anh=mysql_query("SELECT anhminhhoa FROM quangcao WHERE idanh=$id");
			$dong=mysql_fetch_array($anh);
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
			}
			//----------
			
			$sql="UPDATE quangcao SET anhminhhoa='$dich', duongdan='$duongdan', loaianh='$loaianh', tenanh='$tenquangcao' WHERE idanh=$id";
		}
		else{
			$sql="UPDATE quangcao SET anhminhhoa='$dich', duongdan='$duongdan', loaianh='$loaianh', tenanh='$tenquangcao' WHERE idanh=$id";
		}
		mysql_query($sql);
		header("location: ../../index.php?quanly=quangcao&ac=sua&id=".$id);
	}
	
	
	
	else{
		//---------xoa anh co roi
		$sql="SELECT anhminhhoa FROM quangcao WHERE idanh= $id";
		$anh=mysql_query($sql);
		$dong=mysql_fetch_array($anh);
		if($dong["anhminhhoa"]!=""){
			unlink("../../../".$dong["anhminhhoa"]);
		}
		//----------	
		
		$sql="DELETE FROM quangcao WHERE idanh= $id";
		//echo $sql;
		mysql_query($sql);
		header("location: ../../index.php?quanly=quangcao&ac=them");
	}
?>