<?
	$tenmaychu="localhost";
	$taikhoan="root";
	$matkhau="1234";
	$csdl="tuoitre";
	
	$con = mysqli_connect($tenmaychu, $taikhoan, $matkhau, $csdl);
	mysqli_query($con,"SET NAMES 'UTF8'");
?>