<?
	include("../config.php");
	
	$id=$_GET["id"];
	$tenloaitin=$_POST["tenloaitin"];
	$trangthai=$_POST["trangthai"];
	
	if(isset($_POST["them"])){
		//thuc hien them du lieu
		$sql="INSERT INTO loaitin (tenloaitin, trangthai) VALUES ('$tenloaitin','$trangthai')";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=them");
	}else if(isset($_POST["sua"])){
		//thuc hien sua
		$sql="UPDATE loaitin SET tenloaitin='$tenloaitin', trangthai='$trangthai' WHERE idloaitin= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=sua&id=".$id);
	}else{
		//thuc hien xoa
		$sql="DELETE FROM loaitin WHERE idloaitin= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=them");
	}
?>