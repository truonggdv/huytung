<?php
	if(isset($_POST['dangky'])){
		$tenkhachhang=$_POST['tenkhachhang'];
		$matkhau=$_POST['matkhau'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$dinhdangemail = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
		//Định dạng tên: Chứa các ký tự A đến Z, a đến z, 0-9 dấu .  và dấu gạch dưới - dấu cách Độ dài 2 đến 50 ký tự
		$dinhdangten='/^[A-Za-z0-9_\. ]{2,50}$/';
		//Cả ký tự chử cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm  - Bắt đầu với ký tự in hoa - Có từ 6 đến 32 ký tự
		$dinhdangmatkhau="/^([A-Za-z])([\w_\.!@#$%^&*()]+){3,31}$/";
		$sql_dangky="insert into dangky (tenkhachhang,matkhau,email,diachi,dienthoai) value('$tenkhachhang','$matkhau','$email','$diachi','$dienthoai')";
		if($tenkhachhang=="" || $matkhau=="" || $email=="" || $diachi="" || $dienthoai=="")
		{
			echo"<script> alert('Vui lòng không bỏ trống thông tin!');</script> ";
		}
		else
		{
				if(preg_match($dinhdangemail,$email,$match)==1)
				{
					if(is_numeric($dienthoai)==true && strlen($dienthoai)>9 && strlen($dienthoai)<12)
					{
						if(preg_match($dinhdangten ,$tenkhachhang, $match))
						{
							
								if(strpos($tenkhachhang,"  ")==true )
								{
									echo"<script> alert('Nhập tên không có 2 khoảng cách');</script> ";
								}
								else
								{
									if(mysqli_query($conn,$sql_dangky))
									{
										echo"<script> alert('Thêm Thành Công');</script> ";
										header('location:index.php?xem=dangnhap');
									}
									else
									{
										echo"<script> alert('Thêm Thất Bại!');</script> ";
										header('location:index.php?xem=dangky');
									}
								}
									
							
							
						}
						else
						{
							echo"<script> alert('Xem lại định dạng tên!');</script> ";
						}
						
					}
					else 
					{
						echo"<script> alert('Định dạng số diện thoại sai!(Chỉ nhập số. 10<=Độ dài<=11');</script> ";
					}
				}
				else
				{
					echo"<script> alert('Định dạng Email sai! (abc @ def . ghi)');</script> ";
				}
		}
		
	}
?>

<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
  <div align="center" style="margin-top:50px;">
    <table width="625" border="0">
      <tr>
        <td height="43" colspan="2" style="font-size:24px; color:#FFF; font-weight:bold; background:#0080FF" ><div align="center"><strong>Đăng ký thành viên</strong></div></td>
      </tr>
      <tr>
        <td width="176" height="35" bgcolor="#FFFFFF" style="padding-left:10px; font-weight:bold; color:#0080FF"><strong>Tên khách hàng</strong></td>
        <td width="439" bgcolor="#FFFFFF" style="padding-left:10px;"><input name="tenkhachhang" type="text" size="50"></td>
      </tr>
      <tr>
        <td height="36" bgcolor="#FFFFFF" style="padding-left:10px; font-weight:bold; color:#0080FF"><strong>Mật khẩu</strong></td>
        <td bgcolor="#FFFFFF" style="padding-left:10px;"><input type="password" name="matkhau" size="50"></td>
      </tr>
      <tr>
        <td height="34" bgcolor="#FFFFFF" style="padding-left:10px; font-weight:bold; color:#0080FF"><strong>Email</strong></td>
        <td bgcolor="#FFFFFF" style="padding-left:10px;"><input type="text" name="email" size="50"></td>
      </tr>
      <tr>
        <td height="34" bgcolor="#FFFFFF" style="padding-left:10px; font-weight:bold; color:#0080FF"><strong>Địa chỉ</strong></td>
        <td bgcolor="#FFFFFF" style="padding-left:10px;"><input type="text" name="diachi" size="50"></td>
      </tr>
      <tr>
        <td height="35" bgcolor="#FFFFFF" style="padding-left:10px; font-weight:bold; color:#0080FF"><strong>Điện thoại</strong></td>
        <td bgcolor="#FFFFFF" style="padding-left:10px;"><input type="text" name="dienthoai" size="50"></td>
      </tr>
      <tr>
        <td height="56" colspan="2" bgcolor="#FFFFFF"><div align="center">
           <input type="submit" style="margin-left:30%;font-size:18px;" class="button" name="dangky" value="Đăng ký">
        </div></td>
      </tr>
  </table>
  </div>
</form>
