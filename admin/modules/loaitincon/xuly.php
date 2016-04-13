<?
	include("../config.php");
	
	$id=$_GET["id"];
	$tenloaitin=$_POST["tenloaitin"];
	$trangthai=$_POST["trangthai"];
	$loaitincha=$_POST["loaitincha"];
	
	if(isset($_POST["them"])){
		//thuc hien them du lieu
		$sql="INSERT INTO loaitincon (tenloaitincon, trangthai, idloaitincha) VALUES ('$tenloaitin','$trangthai','$loaitincha')";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitincon&ac=them");
	}else if(isset($_POST["sua"])){
		//thuc hien sua
		$sql="UPDATE loaitincon SET tenloaitincon='$tenloaitin', trangthai='$trangthai', idloaitincha='$loaitincha' WHERE idloaitincon= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitincon&ac=sua&id=".$id);
	}else{
		//thuc hien xoa
		$sql="DELETE FROM loaitincon WHERE idloaitincon= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitincon&ac=them");
	}
?>