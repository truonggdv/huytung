<?php
  	session_start();
	if(isset($_SESSION['dangnhap'])){
		?>
       	<div style="float:right" class="button">Xin chào: <?php echo $_SESSION['dangnhap']?></div>
       <a href="index.php?xem=dangxuat"> <div style="float:right" class="button"> Đăng xuất</div></a>
       
	<?php
	}
	?>

<p>
<br/>
 <br/>
<div align="center">
  <?php
	if(isset($_GET['add'])&& !empty($_GET['add'])){
		$id=$_GET['add'];
		 @$_SESSION['cart_'.$id]+=1;
		 header('location:index.php?xem=giohang');
	}
	//cong  san pham
	if(isset($_GET['them'])){
		
		$_SESSION['cart_'.$_GET['them']]+=1;
		header('location:index.php?xem=giohang');
	}
	//tru  san pham
	if(isset($_GET['tru'])){
		
		$_SESSION['cart_'.$_GET['tru']]--;
		header('location:index.php?xem=giohang');
	}
	//xoa  san pham
	if(isset($_GET['xoa'])){
		
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header('location:index.php?xem=giohang');
	}
	?>
     <table width="937" height="70" border="0">
    <tr style="color:#FFF; height:50px; font-size:18px; font-family:'Times New Roman', Times, serif; text-align:center; font-weight:bold">
      <td width="54" bgcolor="#0080FF"><div align="center">STT</div></td>
      <td width="422" bgcolor="#0080FF"><div align="center">Tên sản phẩm</div></td>
      <td width="92" bgcolor="#0080FF"><div align="center">Giá</div></td>
      <td width="111" bgcolor="#0080FF"><div align="center">Số lượng</div></td>
      <td width="130" bgcolor="#0080FF"><div align="center">Chức năng</div></td>
      <td width="102" bgcolor="#0080FF"><div align="center">Tổng tiền</div></td>
      </tr>
      <?php
	//hien thi san pham da them
	$thanhtien=0;
	$tongtien=0;
	$stt=1;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name)-5);
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysqli_query($conn,$sql);
				
					?>
 
    <?php while($dong=mysqli_fetch_array($query)){
								$tongtien=$dong['gia']*$value; ?>
    <tr style="background:#FFF; font-size:16px; font-weight:bold; color:#004080">
      <td><div  align="center"><?php echo $stt ?></div></td>
      <td><div align="center"><?php echo $dong['tensp'] ?></div></td>
      <td><div align="center"><?php echo  number_format($dong['gia'],0,".",".")  ?></div></td>
      <td><div align="center"><?php echo $value ?></div></td>
      <td><div align="center"><div style="margin-top:25px;"><?php echo '<a style="background:#0080FF;padding-left:10px;color:#FFF;padding-right:10px;padding-top:5px;padding-bottom:5px; float:left; font-size:20px; font-weight:bold; margin-left:10px;text-decoration:none;" href="index.php?xem=giohang&them='.$id.'"><div>+</div></a>
								<a style="color:#FFF;background:#0080FF; float:left; padding-left:12px;padding-right:12px;padding-top:5px;padding-bottom:5px; font-size:20px; font-weight:bold; margin-left:10px;text-decoration:none;" href="index.php?xem=giohang&tru='.$id.'"><div>-</div></a>
								<a style="color:#FFF;background:#0080FF; float:left; padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; font-size:20px;margin-left:10px;text-decoration:none;" href="index.php?xem=giohang&xoa='.$id.'"><div>x</div></a>
								<br/><br/><br/>' ?></div></div></td>
      <td><div align="center"><?php echo number_format($tongtien,0,".",".") ?></div></td>
      </tr>
 
  <?php
  $stt=$stt+1;		
				}
			}
			$thanhtien+=$tongtien;
			$_SESSION['thanhtien']=$tongtien;
		}
	}
	   echo "</table>";
	if($thanhtien==0){
		?>
        <br/>
		<div style="color:#0080C0; font-weight:bold; font-size:24px;">Giỏ hàng trống</div>
        <?php
	}else{
		?>
        <br/>
        <br/>
		<div style="font-size:24px; color:#F00; font-weight:bold;">Tổng tiền phải trả = <?php echo number_format($thanhtien,0,".",".")  ?> 'VND'</div>;
        <?php
	}
?>
</div>
<br/>


    <?php
    	if(isset($_SESSION['dangnhap']))
		{
    ?>
    	<p style="float:right; margin-right:350px;" class="button"><a style="text-decoration:none; color:#FFF;" href="index.php?xem=thanhtoan1&tien=<?php echo $_SESSION['thanhtien']?>&tk=<?php echo $_SESSION['dangnhap'] ?>">Thanh Toán</a></p>
    <?php
        }
        else
        {
    ?> 
    	<div style="float:right; margin-right:350px;" class="button"> <a style="text-decoration:none; color:#FFF;"  href="index.php?xem=thanhtoan">Mua Hàng</a></div>
    <?php 
		}
	?>
    
    	<div style="float:right" class="button" ><a style="text-decoration:none; color:#FFF;" href="index.php?xem=tatcasanpham">Tiếp tục mua hàng</a></div>
    
