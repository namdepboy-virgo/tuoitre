<?
	include("../config.php");	
	
	$id=$_GET["id"];
	$tenbaiviet=$_POST["tenbaiviet"];
	$tomtat=$_POST["tomtat"];
	$noidung=$_POST["noidung"];
	$idloaitincon=$_POST["loaitin"];
	$trangthai=$_POST["trangthai"];
	$tenanh = $_FILES["anhminhhoa"]["name"];
	
	
	$result=mysql_query("SELECT * FROM loaitincon WHERE loaitincon.idloaitincon='$loaitin'");
	$dong=mysql_fetch_array($result);
	$idloaitincha=$dong["idloaitincha"];
			
	if(isset($_POST["them"])){
		
		if($tenanh!=""){
			
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);
			$dich=substr($dich,9);
		}
		$sql="INSERT INTO baiviet(tenbaiviet ,anhminhhoa, tomtat, noidung, idloaitin, trangthai, idloaitincon) VALUES('$tenbaiviet','$dich','$tomtat','$noidung','$idloaitincha','$trangthai','$idloaitincon')";
		
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=them");			
	}
	
	
	
	
	else if(isset($_POST["sua"])){
		
		if($tenanh!=""){
			
			$time = date("Ymdhis");
			$tenanh = $time . $tenanh;
			$dich = "../../../uploads/".$tenanh;
			
			copy($_FILES["anhminhhoa"]["tmp_name"], $dich);			
			$dich=substr($dich,9);
			
			//---------xoa anh co roi
			$sql="SELECT anhminhhoa FROM baiviet WHERE idbaiviet=$id";
			$baiviet=mysql_query($sql);
			$dong=mysql_fetch_array($baiviet);
			if($dong["anhminhhoa"]!=""){
				unlink("../../../".$dong["anhminhhoa"]);
			}
			//----------
			
			$sql="UPDATE baiviet SET tenbaiviet='$tenbaiviet', anhminhhoa='$dich', tomtat='$tomtat', noidung='$noidung', idloaitin='$idloaitincha', trangthai='$trangthai', idloaitincon='$idloaitincon' WHERE idbaiviet=$id";
		}
		else{
			$sql="UPDATE baiviet SET tenbaiviet='$tenbaiviet' ,anhminhhoa='$dich', tomtat='$tomtat', noidung='$noidung', idloaitin='$idloaitincha', trangthai='$trangthai', idloaitincon='$idloaitincon' WHERE idbaiviet=$id";	
		}
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=sua&id=".$id);
	}
	
	
	
	else{
		//---------xoa anh co roi
		$sql="SELECT anhminhhoa FROM baiviet WHERE idbaiviet= $id";
		$baiviet=mysql_query($sql);
		$dong=mysql_fetch_array($baiviet);
		if($dong["anhminhhoa"]!=""){
			unlink("../../../".$dong["anhminhhoa"]);
		}
		//----------	
		
		$sql="DELETE FROM baiviet WHERE idbaiviet= $id";
		//echo $sql;
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=them");
	}
?>