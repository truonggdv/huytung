<?php
	include('../config.php');
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
	else
		
	{
		$tam='';	
	}
	//$id=$_GET['id'];

	$tensp=$_POST['tensp'];
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	$thutu=$_POST['thutu'];
	$thongtinnhanh=$_POST['thongtinnhanh'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		//them
		if(!$tensp || !$gia || !$loaisp || !$hinhanh || !$thutu )
		{
			echo "<script> alert('Nhập đầy đủ thông tin'); </script>";
			echo "<script> window.location='../../index.php?quanly=quanlychitietsp&ac=them'; </script>";
		}
		else
		{
		$sql="insert into chitietsp (tensp,thutu,gia,id_loaisp,hinhanh,thongtinnhanh) values('$tensp',$thutu,$gia,$loaisp,'$hinhanh','$thongtinnhanh')";
		if(mysqli_query($conn,$sql))
		{	
			echo "<script> window.location='../../index.php?quanly=quanlychitietsp&ac=them'; </script>";
		}
		else
		{
			echo "<script> alert('Thêm thất bại'); </script>";
		}
		}
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp',thutu=$thutu,gia=$gia,id_loaisp=$loaisp, hinhanh='$hinhanh', thongtinnhanh='$thongtinnhanh' where id_sp='$id'";
		}else{
			$sql="update chitietsp set tensp='$tensp',thutu=$thutu,gia=$gia,id_loaisp=$loaisp, thongtinnhanh='$thongtinnhanh' where id_sp='$id'";
		}
		if(mysqli_query($conn,$sql))
		{
			echo "<script> alert('Sửa thành công'); </script>";
			echo "<script> window.location='../../index.php?quanly=quanlychitietsp&ac=them'; </script>";
		}else
		{
			echo $sql;
			echo "<script> alert('Sửa thất bại'); </script>";
			
		}
	}else{
		//xoa
		$sql="delete from chitietsp where id_sp='$id'";
		if(mysqli_query($conn,$sql))
		{
		echo "<script> window.location='../../index.php?quanly=quanlychitietsp&ac=them'; </script>";
		}
		else
		{
			echo "<script> alert('Xóa thất bại'); </script>";
		}
	}
?>