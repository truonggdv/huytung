<?php
	$sql_loaisp="select * from loaisp where thutu=1";
	$query=mysqli_query($conn,$sql_loaisp);
?>

        	<p style="margin-top:5px; text-align:center;color:red;background:#0080C0;padding:10px; text-decoration:none; font-size:24px; font-weight:bold;font-family:'Times New Roman', Times, serif;"><a style="text-decoration:none; color:#FFF;" href="#">Sản phẩm</a></p>
            <div class="danhsachsanpham">
            	<ul>
                <?php
				while($dong_sp=mysqli_fetch_array($query)){
				?>
                	<a style="font-family:'Times New Roman', Times, serif;" href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><li><?php echo $dong_sp['tenloaisp'] ?></li></a>
                   <?php
				}
				   ?>
                </ul>
</div><!--Ket thuc loai sanpham-->
           
           
<?php
	$sql_loaisp="select * from loaisp where thutu!=1";
	$query=mysqli_query($conn,$sql_loaisp);
?>

        	<p style="margin-top:5px; text-align:center;color:red;background:#0080C0;padding:10px; text-decoration:none; font-size:24px; font-weight:bold;"><a style="text-decoration:none; color:#FFF;" href="#">Phụ kiện</a></p>
            <div class="danhsachsanpham">
            	<ul>
                <?php
				while($dong_sp=mysqli_fetch_array($query)){
				?>
                	<a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><li><?php echo $dong_sp['tenloaisp'] ?></li></a>
                   <?php
				}
				   ?>
                </ul>
</div><!--Ket thuc loai sanpham-->
           