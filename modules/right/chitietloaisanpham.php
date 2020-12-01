<?php
	$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>
 <?php
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_loaisp=mysqli_query($conn,$sql_loaisp);
	$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>
        	 <div style="width:200px; height:auto; margin-top:5px; margin-left:6px; color:#FFF; background:#0080FF; font-size:24px; font-family:'Times New Roman', Times, serif; padding:10px;"><?php echo $dong_loaisp['tenloaisp'] ?></div>
             <div style="background:FFF; margin-left:6px; margin-bottom:10px; width:100%; height:2px;"></div>
             
            
             <div class="sanphamall">
             	<ul>
                <?php
				while($dong_chitiet=mysqli_fetch_array($query)){
				?>
                 <li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_chitiet['id_loaisp'] ?>&id=<?php echo $dong_chitiet['id_sp'] ?>">
                    	<img height="100px" width="100px" src="imags/<?php echo $dong_chitiet['hinhanh'] ?> " width="100" height="100" />
                        <p style="color:#0080C0; font-weight:bold; padding-top:5px; font-family:'Times New Roman', Times, serif;" ><?php echo $dong_chitiet['tensp'] ?></p>
						<?php
                        $giaban= $dong_chitiet['gia'];
                        $gianiemyet= $giaban+50000;
                        ?>
                        <br/>
                        <p style="background:#FFF">Giá niêm yết: <?php echo  number_format($gianiemyet,0,".",".")?> VND</p>
                        <br/>
                        <p style="font-family:Arial, Helvetica, sans-serif; font-size:24px; color:#F00; font-weight:bold"><?php echo number_format($dong_chitiet['gia'], 0,".",".") ?>₫</p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
             </div>
             
 