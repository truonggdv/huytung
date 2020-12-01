<?php
	$sql="select * from admin where id_admin=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/trangchu/xuly.php?id=<?php echo $dong['id_admin'] ?>" method="post" enctype="multipart/form-data">
  <div align="center" style="margin-bottom:165px;">
    <table width="98%" border="1">
      <tr>
        <td height="54" colspan="2" bgcolor="#008080"><div align="center" style="color:#FFF; font-size:24px; font-weight:bold">Sửa tài khoản</div></td>
      </tr>
      <tr>
        <td width="21%" height="50" bgcolor="#FFFFFF"><div align="center">Tên tài khoản</div></td>
        <td width="79%" bgcolor="#FFFFFF"><div align="center">
          <input name="tentaikhoan" type="text" value="<?php echo $dong['username'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td height="47" bgcolor="#FFFFFF"><div align="center">Mật khẩu</div></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="matkhau" type="text" value="<?php echo $dong['password'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td height="50" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" class="button" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
  </table>
  </div>
</form>