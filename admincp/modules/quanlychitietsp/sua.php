<?php
	$sql="select * from chitietsp where id_sp='$_GET[id]'";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>" method="post" enctype="multipart/form-data">
  <div align="center">
    <table width="98%" border="1">
      <tr>
        <td height="47" colspan="2" bgcolor="#008080"><div align="center" style="color:#FFF; font-size:24px; font-weight:bold">Sửa chi tiết sp</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">Tên sp</td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="tensp" type="text" value="<?php echo $dong['tensp'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">Giá sp</td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="gia" type="text" value="<?php echo $dong['gia'] ?>" size="60" >
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">Hình ảnh</td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="hinhanh" type="file" size="40"  >
        <img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60" /></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">Chi tiết sản phẩm</td>
        <td bgcolor="#FFFFFF"><textarea name="thongtinnhanh" cols="40" rows="10" id="thongtinnhanh"><?php echo $dong['thongtinnhanh'] ?></textarea></td>
      </tr>
      <?php
  	$sql_loaisp="select * from loaisp";
	$run_loaisp=mysqli_query($conn,$sql_loaisp);
	
  ?>
      
      <tr>
        <td height="40" bgcolor="#FFFFFF">Loại sp</td>
        <td bgcolor="#FFFFFF"><select name="loaisp">
          <?php
    while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
		if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
		?>
          <option selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
          <?php
	}else{
		?>
          <option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
          <?php
	}
	}
		?>
        </select></td>
      </tr>
      <tr>
        <td height="40" bgcolor="#FFFFFF">Thứ tự</td>
        <td bgcolor="#FFFFFF"><input name="thutu" type="text" value="<?php echo $dong['thutu'] ?>" size="60"></td>
      </tr>
      <tr>
        <td height="44" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <button name="sua" class="button" value="sua">Sửa</button>
        </div></td>
      </tr>
  </table>
  </div>
</form>