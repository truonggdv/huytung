<?php
	include('../config.php');
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}else 
	{
		$id="";
	}
		
	if(isset($_POST['tentaikhoan']))
	{
		$tentaikhoan=$_POST['tentaikhoan'];
	}
	else 
	{
		$tentaikhoan="";
	}
	if(isset($_POST['matkhau']))
	{
		$matkhau=$_POST['matkhau'];
	}else 
	{
		$matkhau="";
	}
	

		if(isset($_POST['them'])){
			if($tentaikhoan=="" || $matkhau=="" )
			{
				echo "<script> alert('Không bỏ trống thông tin'); </script>";	
				echo "<script> window.location='../../index.php?quanly=quanlytaikhoan&ac=them';</script>";
			}
			else
			{
				$sqlktra= "select * from admin where username='" .$tentaikhoan."'";
				$kqthu=mysqli_query($conn,$sqlktra);
				$kq=mysqli_num_rows($kqthu);
				
				//them
				if($kq!=0)
				{
					echo "<script> alert('Tài khoản đã có. Vui lòng nhập tài khoản khác!'); </script>";
					echo "<script> window.location='../../index.php?quanly=quanlytaikhoan&ac=them';</script>";
//					header('location:../../index.php?quanly=quanlytaikhoan&ac=them');
				}else{						
				$sql="insert into admin (username,password) values('$tentaikhoan','$matkhau')";
				mysqli_query($conn,$sql);
				header('location:../../index.php?quanly=quanlytaikhoan&ac=them');
				}
			}	
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update admin set username='$tentaikhoan',password='$matkhau' where id_admin='$id'";
		if(mysqli_query($conn,$sql))
		{
		header('location:../../index.php?index.php?quanly=quanlytaikhoan&ac=them');
		}
		else
		{
			echo "<script> alert('Sửa tài khoản thất bại'); </script>";		
		}
	
	}else{
		//xoa
		$sql="delete from admin where id_admin='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlytaikhoan&ac=them');
	}
	
	
?>