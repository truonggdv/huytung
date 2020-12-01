<?php
	$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr style="color:#FFF; background:#0080FF;">
    <td style="font-size:18px;  font-weight:bold"  height="49" bgcolor="#0080FF"><div align="center">ID</div></td>
    <td style="font-size:18px;font-weight:bold" bgcolor="#0080FF"><div align="center">Tên sp</div></td>
    <td style="font-size:18px;font-weight:bold" bgcolor="#0080FF"><div align="center">Hình ảnh</div></td>
    <td style="font-size:18px;font-weight:bold" bgcolor="#0080FF"><div align="center">Giá</div></td>
    <td style="font-size:18px;font-weight:bold" bgcolor="#0080FF"><div align="center">Loại sp</div></td>
    <td style="font-size:18px;font-weight:bold" colspan="2" bgcolor="#0080FF"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
  	while($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $i; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $dong['tensp']; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo number_format( $dong['gia'],0,".","."); ?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><?php echo $dong['tenloaisp']; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><a style="text-decoration:none;" href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>"><i class="fas fa-edit"></i></a></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><a style="text-decoration:none;" href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>"><i class="far fa-trash-alt"></i></a></div></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

<!-- <form action="/PhucKhanh/admincp/modules/quanlychitietsp/exportsp.php" method="post">
     
      <input class="button" style="margin-top:5%;" type="submit"  name="export" class="btn btn-success" value="Export To Excel"  />
      	
      <input class="button" style="padding-left:9%; margin-bottom:10%; ; padding-right:9%;" " type="button" class="btn btn-success"  value="In" onclick="window.print()" />
 -->
