<?php
	$sql="select * from loaisp where id_loaisp=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>" method="post" enctype="multipart/form-data">
  <div align="center">
    <table width="98%" border="1">
      <tr>
        <td height="46" colspan="2" bgcolor="#008080"><div align="center" style="color:#FFF; font-size:24px; font-weight:bold">Sửa loại sp</div></td>
      </tr>
      <tr>
        <td width="324" height="38" bgcolor="#FFFFFF" style="margin-left:10px"><div align="center">Tên loại sp</div></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="tenloaisp" type="text" value="<?php echo $dong['tenloaisp'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td height="38" bgcolor="#FFFFFF" style="margin-left:10px"><div align="center">ID loại</div></td>
        <td width="502" bgcolor="#FFFFFF"><div align="center">
          <input name="thutu" type="text" value="<?php echo $dong['thutu'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td height="41" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" class="button" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
  </table>
  </div>
</form>