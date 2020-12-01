<?php
	include('../config.php');

	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}else 
	{
		$id="";
	}
		$tenloaisp=$_POST['tenloaisp'];
		$thutu=$_POST['thutu'];

	if(isset($_POST['them'])){
		//them
		
		if($tenloaisp=="" || $thutu=="" )
		{
				echo "<script> alert('Không bỏ trống thông tin'); </script>";	
				echo "<script> window.location='../../index.php?quanly=quanlyloaisp&ac=them';</script>";
		}
		else
		{	
				
					$sql="insert into loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
					if(mysqli_query($conn,$sql))
					{
						header('location:../../index.php?quanly=quanlyloaisp&ac=them');
					}else
					{
						echo "<script> alert('Thêm thất bại'); </script>";
					}
				
		}
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from loaisp where id_loaisp='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>