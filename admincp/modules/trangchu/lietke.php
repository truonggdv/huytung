<?php
	$sql="select * from admin order by id_admin desc";
	$run=mysqli_query($conn,$sql);
?>
<div align="center">
  <table width="100%" height="96" border="1">
    <tr style="color:#FFF; font-size:16px; font-weight:bold">
      <td width="14%" height="42" bgcolor="#009F00"><div align="center">ID</div></td>
      <td width="32%" bgcolor="#009F00"><div align="center">Tên tài khoản</div></td>
      <td width="32%" bgcolor="#009F00"><div align="center">Mật khẩu</div></td>
      <td colspan="2" bgcolor="#009F00"><div align="center">Quản lý</div></td>
    </tr>
    <?php
  $i=0;
  while($dong=mysqli_fetch_array($run)){
  ?>
    <tr>
      <td height="46" bgcolor="#FFFFFF"><div align="center"><?php echo $i; ?></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><?php echo $dong['username'] ?></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><?php echo $dong['password'] ?></div></td>
      <td width="11%" bgcolor="#FFFFFF"><div align="center"><a style="text-decoration:none" href="index.php?quanly=quanlytaikhoan&ac=sua&id=<?php echo $dong['id_admin'] ?>"><i class="fas fa-edit"></i></a></div></td>
      <td width="11%" bgcolor="#FFFFFF"><div align="center" ><a style="text-decoration:none" href="modules/trangchu/xuly.php?id=<?php echo $dong['id_admin'] ?>"><i class="far fa-trash-alt"></i></a></div></td>
    </tr>
    <?php
  $i++;
  }
  ?>
  </table>
  <!-- <div style="margin-top:5%;">
    <form action="/PhucKhanh/admincp/modules/trangchu/export.php" method="post">
      		<input class="button" type="submit"  name="export" class="btn btn-success" value="Export To Excel"  />
      	
      <input class="button" style="padding-left:9%; padding-right:9%;" " type="button" class="btn btn-success"  value="In" onclick="window.print()" />
      </div> -->
</div>

