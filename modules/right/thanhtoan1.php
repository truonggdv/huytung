
<?php
	session_start();
	$tk=$_GET['tk']; 
	$sql="select * from dangky where tenkhachhang='$tk'";
	$thongtincsdl=mysqli_query($conn,$sql);
	$thongtin=mysqli_fetch_array($thongtincsdl);
	$ten=$thongtin['tenkhachhang'];
	$email=$thongtin['email'];
	$sqlthem="insert into khachhang values('$ten','$email')"; 
	if(mysqli_query($conn, $sqlthem))
	{
		echo "<script> alert('Đặt hàng thành công!'); </script>";
	?>
    <div style="margin-left:5%; font-size:20px; color:#06C">
    <br /><br/>
    <p>Cảm ơn: <?php echo $ten?> đã mua hàng tại TEE&TEE </p>
    <p>Thông tin của quý khách là: </p>
    <p>Tên tài khoản:<?php echo $thongtin['tenkhachhang']; ?> </p>
    <p>Email:<?php echo $thongtin['email']; ?> </p>
    <p>Địa chỉ:<?php echo $thongtin['diachi']; ?> </p>
    <p>Tổng tiền quý khách đã mua là: <?php echo $_GET['tien']; ?> VNĐ</p>
    <p style="float:left; margin-top:3%; background:#06C; color:#FFFFFF; padding:15px;"><a style="color:#FFF; text-decoration:none; margin-bottom:10px;"  href="index.php?xem=tatcasanpham">Tiếp tục mua hàng</a></p>
    </div>
    <?php
	session_destroy(); 
	$_SESSION['dangnhap']=$ten;
	}
	else
	{
		echo "<script> alert('Đặt hàng thất bại!'); </script>";
		header('location:index.php?xem=giohang');
	}
	
?>

</div>