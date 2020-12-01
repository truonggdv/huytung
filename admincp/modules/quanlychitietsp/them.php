<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
  <div align="center">
    <table width="97%" border="1">
      <tr>
        <td height="53" colspan="2" bgcolor="#0080C0"><div align="center" style="color:#FFF; font-size:24px; font-weight:bold">Thêm chi tiết sản phẩm</div></td>
      </tr>
      <tr>
        <td width="19%" height="38" bgcolor="#FFFFFF" style="padding-left:10px;color:#006600;">Tên sản phẩm</td>
        <td width="81%" bgcolor="#FFFFFF"><input name="tensp" type="text" size="60" ></td>
      </tr>
      <tr>
        <td height="38" bgcolor="#FFFFFF" style="padding-left:10px;color:#006600;">Giá sản phẩm</td>
        <td bgcolor="#FFFFFF"><input name="gia" type="text" size="60" ></td>
      </tr>
      <tr>
        <td height="36" bgcolor="#FFFFFF" style="padding-left:10px;color:#006600;">Hình ảnh</td>
        <td bgcolor="#FFFFFF"><input name="hinhanh" type="file" size="48" ></td>
      </tr>
      <?php
  	$sql="select * from loaisp";
	$run=mysqli_query($conn,$sql);
	
  ?>
      
      <tr>
        <td bgcolor="#FFFFFF" style="padding-left:10px;color:#0080C0;">Chi tiết sản phẩm</td>
        <td bgcolor="#FFFFFF"><textarea name="thongtinnhanh" cols="40" rows="10" id="thongtinnhanh"></textarea></td>
      </tr>
      <tr>
        <td height="38" bgcolor="#FFFFFF" style="padding-left:10px;color:#0080C0;">Loại sản phẩm</td>
        <td bgcolor="#FFFFFF"><select name="loaisp">
          <?php
    while($dong=mysqli_fetch_array($run)){
		?>
          <option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp']?></option>
          <?php
	}
		?>
        </select></td>
      </tr>
      <tr>
        <td height="34" bgcolor="#FFFFFF" style="padding-left:10px;color:#0080C0;">Thứ tự</td>
        <td bgcolor="#FFFFFF"><input name="thutu" type="text" size="60"></td>
      </tr>
      <tr>
        <td height="34" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" class="button" name="them" id="them" value="Thêm" style="background:#006600; padding-left:30px; padding-right:30px;" />
          <input type="reset" name="button" class="button" value="Nhập lại" style="background:#006600" />
        </div></td>
      </tr>
  </table>
  </div>
</form>