<?
	$tenmaychu="localhost";
	$taikhoan="root";
	$matkhau="1234";
	$csdl="tuoitre";
	
	$con=mysql_connect($tenmaychu, $taikhoan, $matkhau);
	if(!$con)
	{
		echo"khong the ket noi CSDL";
		exit;	
	}
	$con_selected=mysql_select_db($csdl,$con);
	if(!$con_selected)
	{
		die("khong the su dung CSDL: ".mysql_error());	
	}
	
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
?>