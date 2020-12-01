<?php
	if(isset($_POST['gui'])){
		$hoten=$_POST['hoten'];
			$email=$_POST['email'];
			$sodienthoai=$_POST['sodienthoai'];
			$noidung=$_POST['noidung'];
		$dinhdangemail = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
		//Định dạng tên: Chứa các ký tự A đến Z, a đến z, 0-9 dấu .  và dấu gạch dưới - dấu cách Độ dài 2 đến 50 ký tự
		$dinhdangten='/^[A-Za-z0-9_\. ]{2,50}$/';
		if($_POST['hoten']=="" || $_POST['email']=="" || $_POST['sodienthoai']="" || $_POST['noidung']=="")
		{
			echo"<script> alert('Vui lòng không bỏ trống thông tin!');</script> ";
		}
		else
		{
			
				if(preg_match($dinhdangemail,$email,$match)==1)
				{
					if((is_numeric($sodienthoai)==true && strlen($sodienthoai)>9 && strlen($sodienthoai)<12)==1)
					{
						if(preg_match($dinhdangten ,$hoten, $match))
						{
								if(strpos($hoten,"  ")==true )
								{
									echo"<script> alert('Nhập tên không có 2 khoảng cách');</script> ";
								}
								else
								{
											if(mysqli_query($conn,$sql_dangky))
											{
												echo"<script> alert('Phản Hồi Thành Công');</script> ";
											}
											else
											{
												echo"<script> alert('Phản Hồi Thất Bại!');</script> ";
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



<div align="center" style="margin-top:50px;">
  <form id="form1" name="form1" method="post" action="index.php?xem=lienhe">
    <table width="633" height="413" border="0">
      <tr style="background:#0080FF; color:#FFF; font-size:24px; font-weight:bold;  text-align:center;">
        <td colspan="2">Liên hệ</td>
      </tr>
      <tr>
        <td width="168" bgcolor="#FFFFFF"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Họ tên</div></td>
        <td width="455" bgcolor="#FFFFFF"><label for="hoten"></label>
          <div align="center">
            <input name="hoten" type="text" id="hoten" size="50" />
          </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Email</div></td>
        <td bgcolor="#FFFFFF"><label for="email"></label>
          <div align="center">
            <input name="email" type="text" id="email" size="50" />
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Số điện thoại</div></td>
        <td bgcolor="#FFFFFF"><label for="sodienthoai"></label>
          <div align="center">
            <input name="sodienthoai" type="text" id="sodienthoai" size="50" />
        </div></td>
      </tr>
      <tr>
        <td height="184" bgcolor="#FFFFFF"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Nội dung</div></td>
        <td bgcolor="#FFFFFF"><label for="noidung"></label>
          <div align="center">
            <textarea name="noidung" cols="50" rows="10" id="noidung"></textarea>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input type="submit" class="button" name="gui" id="gui" value="Gửi" />
          <input type="reset" name="button2" class="button" id="button2" value="Nhập lại" />
        </div></td>
      </tr>
    </table>
  </form>
</div>
