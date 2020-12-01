<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='banmaytinh';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl);
	if(!$conn)
	{
		die('Kết nối thất bại').mysqli_connect_error();
	}

?>