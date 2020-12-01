<?php
 	session_start();
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query_chitietsp=mysqli_query($conn,$sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<div id="chitietsp">
  
  <div align="center">
      <table width="99%" border="0" style="border-collapse:collapse">
        <tr>
          <td height="48" colspan="2">
          <div style="width:200px; height:auto; color:#FFF; background:#0080FF; font-size:24px; font-family:'Times New Roman', Times, serif; padding:5px; text-align: center;">Chi tiết sản phẩm</div>
          <div style="background:#0080FF; width:100%; height:2px;"></div></td>
        </tr>
        
        <tr style="background:#FFF;">
          <td  width="565" rowspan="3"><div align="center"><img src="imags/<?php echo $dong_chitietsp['hinhanh'] ?>" width="200" height="200" /></div></td>
          <td width="581" style="color:#06C; font-size:20px; font-weight:bold;">Tên SP: <?php echo $dong_chitietsp['tensp'] ?></td>
        </tr>
        <tr style="background:#FFF;">
          <td height="125" style="color:black;font-size:15px;" ><?php echo $dong_chitietsp['thongtinnhanh']?></td>
        </tr>
        <tr style="background:#FFF;">
          <td height="63" style="color:#F00;  font-weight:bold; font-size:30px'" ><div align="left" style="font-size:30px">Giá SP: <?php echo number_format($dong_chitietsp['gia'],0,".","."). 'VNĐ' ?></div></td>
        </tr>
        <tr style="background:#FFF;">
          <td>&nbsp;</td>
          <td style="color:#F00" ><ul style="list-style:none; float:left">
            <li style="float:left;	line-height:30px; padding-bottom:15px; padding-top:15px; padding-left:25px; font-weight:bold; padding-right:25px; font-size:20px ; margin-bottom:10px	;margin-left:100px; background:#069;"><a style="text-decoration:none; color:#FFF;" href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>">Đặt Mua</a></li>
            
          </ul></td>
        </tr>
        
        
        
        
        <tr>
          <td height="385" colspan="2"><div style="width:250px;  color:#FFF; margin-top:5px; background:#0080FF; font-size:24px; font-family:'Times New Roman', Times, serif; padding:5px; text-align: center;">Sản phẩm cùng loại</div>
          
          <br>
             <div class="sanphamall">
             	<ul>
                <?php
				$sql_spcungloai= mysqli_query($conn,"select * from chitietsp where id_loaisp='$_GET[idloaisp]' and chitietsp.id_sp<>$_GET[id] limit 4");
				while($dong_spcungloai=mysqli_fetch_array($sql_spcungloai)){
				?>
                
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_spcungloai['id_loaisp'] ?>&id=<?php echo $dong_spcungloai['id_sp'] ?>">
                    	<img height="100px" width="100px" src="imags/<?php echo $dong_spcungloai['hinhanh'] ?> " width="100" height="100" />
                        <p style="color:#06C; font-size:12px; font-weight:bold;"><?php echo $dong_spcungloai['tensp'] ?></p>
						<?php
                        $giaban= $dong_spcungloai['gia'];
                        $gianiemyet= $giaban+50000;
                        ?>
                        <br/>
                        <p style="background:#FFF">Giá niêm yết: <?php echo number_format($gianiemyet,0,".",".") ; ?></p>
                        <br/>
                        <p style="font-family:Arial, Helvetica, sans-serif; font-size:24px; color:#F00; font-weight:bold"><?php echo number_format($dong_spcungloai['gia'], 0,".",".") ?>₫</p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
             </div>
     
          
          <div style="background:#008 0FF; width:100%; height:2px;"></div></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
       
    </table>
    </div>

        <div class="binhluan" style="text-align:left">
        <div style=" color:#06C; font-size:26px; font-weight:bold; background:#FFF;">Bình luận về sản phẩm</div>
        <br/>
        <form id="form1" name="form1" method="post">
          <label for="txtnoidung"></label>
          
            <?php 
			if(isset($_SESSION['dangnhap']))
			{
				 $_SESSION['tkbl']= $_SESSION['dangnhap'] ;
			}
			
			?>
            <?php $_SESSION['idsp']= $_GET['id']?>
            <textarea name="txtnoidung" id="txtnoidung" cols="138" rows="5"></textarea>
            <br/>
          <div style="margin-left:38%;"><input  type="submit" name="abcdef" class="button" value="Bình luận" /></div>
        </form>
          
         <?php 
         if(isset($_POST['abcdef']))
         {
             if(isset($_SESSION['dangnhap']))
             {
                 $user= $_SESSION['tkbl'];
                 $nd= $_POST['txtnoidung'];
                 $idsp= $_GET['id'];
                 $sql="insert into binhluan values($idsp,'$nd','$user')";
                 if(mysqli_query($conn, $sql))
                 {
                 }
                 else
                 {
                     echo "<script> alert('Bình luận lỗi rồi '); </script>";
                 }
             }
             else
             {
                 echo "<script> alert('Vui lòng đăng nhập để bình luận!'); </script>";
             }
         }
        
        ?>
      
                <br/>
                <div style="color:#069; font-size:26px; font-weight:bold; background-color:#FFF">Nội dung bình luận</div>
                <br/>
              
         <?php	
                $csdlbinhluan= mysqli_query($conn, "select * from binhluan where idsanpham=$_GET[id]");
                while($dongbinhluan= mysqli_fetch_array($csdlbinhluan))
                {
                    ?>
                   <div style="background-color:#FFF; margin-bottom:2px;" >
                    <i class="fas fa-user-circle" style="float:left; margin-right:10px;"></i><div style="color:#069;  font-size:20px; font-weight:bold;"> <?php echo $dongbinhluan['taikhoanbinhluan'] ?> </div>
                    <div style="margin-left:30px"><?php echo $dongbinhluan['noidungbinhluan'] ?>	</div>
                   <div>
                    <br/>
                    <?php 
                }
         ?>
         </div>
</div>