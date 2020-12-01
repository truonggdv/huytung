<?php
	session_start();
	if(isset($_POST['dangnhap'])){
		$tentaikhoan=$_POST['tentaikhoan'];
		$matkhau=$_POST['matkhau'];
		$sql_dangnhap="select * from dangky where tenkhachhang='$tentaikhoan' and matkhau='$matkhau'";
		$run_dangnhap=mysqli_query($conn,$sql_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap==0){
			echo "<script> alert('sai tai khoan hay mat khau')</script>";
		}else{
			$_SESSION['dangnhap']=$tentaikhoan;
			header('location:index.php?xem=giohang');
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data" style="margin-top:50px">
  <div align="center">
    <table width="595" border="0">
      <tr>
        <td height="51" colspan="2" style="background:#0080FF; color:#FFF; font-size:24px; font-family:'Times New Roman', Times, serif; font-weight:bold"><div align="center">Đăng nhập</div></td>
      </tr>
      <tr>
        <td width="202" height="40" bgcolor="#FFFFFF" style="padding-left:15px; font-size:20px; font-weight:bold;color:#0080C0"> Tên tài khoản</td>
        <td width="383" bgcolor="#FFFFFF"  style="padding-left:15px;"><input type="text" name="tentaikhoan" size="50"></td>
      </tr>
      <tr>
        <td height="35" bgcolor="#FFFFFF" style="padding-left:15px;font-size:20px; font-weight:bold ;color:#0080C0"> Mật khẩu</td>
        <td bgcolor="#FFFFFF"  style="padding-left:15px;"><input type="password" name="matkhau" size="50"></td>
      </tr>
      <tr>
        <td height="36" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" name="dangnhap" style="margin-left:30%; font-size:16px;" class="button" value="Đăng nhập">
        </div></td>
      </tr>
  </table>
  </div>
</form>
