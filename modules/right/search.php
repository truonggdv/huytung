
 <?php
 	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from chitietsp where tensp LIKE '%$search%'";
		$query_search=mysqli_query($conn,$sql_search);
	}
?>
        	 <p style=" margin-top:5px;text-align:center;color:#FFF;background:#0080C0;padding:10px;font-size:24px; font-weight:bold;">Sản phẩm tìm thấy</p>
             <div class="sanphamall">
             <?php
			 if($count=mysqli_num_rows($query_search)==0){?>
				 <p>Không tìm thấy sản phẩm nào</p>
			 <?php
			 }else{
			 ?>
             	<ul>
                <?php
				while($dong_search=mysqli_fetch_array($query_search)){
				?>
                <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp'] ?>">
                    	<img height="100px" width="100px" src="imags/<?php echo $dong_search['hinhanh'] ?> " width="100" height="100" />
                        <p ><?php echo $dong_search['tensp'] ?></p>
						<?php
                        $giaban= $dong_search['gia'];
                        $gianiemyet= $giaban+50000;
                        ?>
                        <br/>
                        <p style="background:#B7E8FF">Giá niêm yết: <?php echo $gianiemyet ; ?></p>
                        <br/>
                        <p style="font-family:Arial, Helvetica, sans-serif; font-size:24px; color:#F00; font-weight:bold"><?php echo $dong_search['gia'] ?>   ₫</p>
                    </a></li>
                    <?php
				}
			 }
					?>
                </ul>
             </div>
              <p style="clear:both;">
             
 