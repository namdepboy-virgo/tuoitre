<?
	include("../config.php");	
	
	$id=$_GET["id"];
	$tenvideo=$_POST["tenvideo"];
	$noidung=$_POST["noidung"];
	$trangthai=$_POST["trangthai"];
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
		$sql="INSERT INTO video(tenvideo ,duongdan, anhminhhoa, trangthai, noidung) VALUES('$tenvideo' ,'$duongdan', '$dich', '$trangthai', '$noidung')";
		
		mysql_query($sql);
		header("location: ../../index.php?quanly=video&ac=them");			
	}
	
	
	else if(isset($_POST["sua"])){
		if($tenanh!=""){
			
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);			
			$dich=substr($dich,9);
			
			//---------xoa anh co roi
			$video=mysql_query("SELECT anhminhhoa FROM video WHERE idvideo=$id");
			$dong=mysql_fetch_array($video);
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
			}
			//----------
			
			$sql="UPDATE video SET tenvideo='$tenvideo', anhminhhoa='$dich', trangthai='$trangthai', duongdan='$duongdan', noidung='$noidung' WHERE idvideo=$id";
		}
		else{
			$sql="UPDATE video SET tenvideo='$tenvideo', anhminhhoa='$dich', trangthai='$trangthai', duongdan='$duongdan', noidung='$noidung' WHERE idvideo=$id";
		}
		mysql_query($sql);
		header("location: ../../index.php?quanly=video&ac=sua&id=".$id);
	}
	
	
	
	else{
		//---------xoa anh co roi
		$sql="SELECT anhminhhoa FROM video WHERE idvideo= $id";
		$video=mysql_query($sql);
		$dong=mysql_fetch_array($video);
		if($dong["anhminhhoa"]!=""){
			unlink("../../../".$dong["anhminhhoa"]);
		}
		//----------	
		
		$sql="DELETE FROM video WHERE idvideo= $id";
		//echo $sql;
		mysql_query($sql);
		header("location: ../../index.php?quanly=video&ac=them");
	}
?>