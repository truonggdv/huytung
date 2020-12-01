<?php
	$sql="select * from loaisp order by id_loaisp desc";
	$run=mysqli_query($conn,$sql);
?>
<div align="center" style="margin-bottom:10%">
  <table width="100%" height="103" border="1">
    <tr style="color:#FFF; font-size:16px; font-weight:bold">
      <td width="7%" height="51" bgcolor="#009F00"><div align="center">ID</div></td>
      <td width="48%" bgcolor="#009F00"><div align="center">Tên loại sản phẩm</div></td>
      <td width="13%" bgcolor="#009F00"><div align="center">ID loại</div></td>
      <td colspan="2" bgcolor="#009F00"><div align="center">Quản lý</div></td>
    </tr>
    <?php
  $i=0;
  while($dong=mysqli_fetch_array($run)){
  ?>
    <tr>
      <td height="44" bgcolor="#FFFFFF"><div align="center"><?php echo $i; ?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" style="font-weight:bold"><?php echo $dong['tenloaisp'] ?></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><?php echo $dong['thutu'] ?></div></td>
      <td width="18%" bgcolor="#FFFFFF"><div align="center"><a style="text-decoration:none" href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>"><i class="fas fa-edit"></i></a></div></td>
      <td width="14%" bgcolor="#FFFFFF"><div align="center" ><a style="text-decoration:none" href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>"><i class="far fa-trash-alt"></i></a></div></td>
    </tr>
    <?php
  $i++;
  }
  ?>
  </table>
  <!-- <form action="/PhucKhanh/admincp/modules/quanlyloaisp/exportloaisp.php" method="post">
      	
      
      <input class="button" type="submit"  name="export" class="btn btn-success" value="Export To Excel"  />
      	
      <input class="button" style="padding-left:9%; padding-right:9%;" " type="button" class="btn btn-success"  value="In" onclick="window.print()" /> -->

</div>