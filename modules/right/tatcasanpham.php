 <link href="../../style/css.css" type="text/css" rel="stylesheet" />
 <?php
	 //phan trang
			 if(isset($_GET['trang'])){
			 	$trang=$_GET['trang'];
			 }else{
					$trang='';
				}
			 if($trang==''||$trang=='1'){
				 $trang1=0;
			 }else{
				 // Do có 15 sản phẩm 1 lần hiển thị.. Nên nếu trang 2 thì = trang 1 +15. ==> trang hiện tại = Trang hiển thị * 15-15.
				 $trang1=($trang*7)-7;
			 }
			 // Chạy từ sản phẩm thứ 1. Lấy ra 15 sản phẩm.
 	$sql_all="select * from chitietsp limit $trang1,12";
	$query_all=mysqli_query($conn,$sql_all);
 ?>
 
        	 <p style="margin-top:5px; margin-left:5px;  text-align:left;color:red;background:#0080C0;height:auto; width:200px; padding:12px;font-family:'Times New Roman', Times, serif; font-size:18px; color:#FFF; font-weight:bold; "> Tất cả Sản phẩm</p>
             <p style="margin-left:5px; background:#0080FF; width:99%; height:2px"></p>
             <br/>
             
             
             <div class="sanphamall">
             	<ul>
                <?php
				while($dong_all=mysqli_fetch_array($query_all)){
				
				?> 
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_all['id_loaisp'] ?>&id=<?php echo $dong_all['id_sp'] ?>">
                    	<img height="100px" width="100px" src="imags/<?php echo $dong_all['hinhanh'] ?> " width="100" height="100" />
                        <p style="color:#0080C0; font-weight:bold; padding-top:5px; font-family:'Times New Roman', Times, serif;" ><?php echo $dong_all['tensp'] ?></p>
						<?php
                        $giaban= $dong_all['gia'];
                        $gianiemyet= $giaban+50000;
                        ?>
                        <br/>
                        <p style="background:#FFF">Giá niêm yết: <?php echo  number_format($gianiemyet,0,".",".")?> VND</p>
                        <br/>
                        <p style="font-family:Arial, Helvetica, sans-serif; font-size:24px; color:#F00; font-weight:bold"><?php echo number_format( $dong_all['gia'],0,".",".") ?>   ₫</p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
             </div>
             <p style="clear:both;">
            
             	<?php
				//dem so trang
					$dong_cou=mysqli_query($conn,"select * from chitietsp");
					//Lấy ra tổng số dòng tương đương tổng số sản phẩm trong cơ sở dữ liệu
					$cou=mysqli_num_rows($dong_cou);
					// Phân ra bao nhiêu sản phẩm thì / cho bấy nhiêu. Lấy làm tròn lên trên dùng ceil
					$a=($cou/9)+1;
					?>
					<div style="background:FFF; color:#000000; height:25px; width:50px; float:left; text-align:center;">Trang:</div>
					<?php for($b=1;$b<$a;$b++){
						echo ' <a class="trangso" style="background:#FFF; text-decoration:none; color:#000000 ; height:25px; width:25px; float:left; margin-left:5px;text-align:center;  " href="index.php?trang='.$b.'">'.$b.'</a>'.' ' ;
					}
			?>
             </p>
             
 