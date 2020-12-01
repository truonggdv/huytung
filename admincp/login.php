<link href="style/css.css" rel="stylesheet" type="text/css">
<div style="width:100%; height:100%; background-image:url(../imags/bg1.jpg)">
<p>
  <?php
	include('modules/config.php');
	session_start();
		if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		echo "user=".$username." và pass=".$password.
		$sql="select * from admin where username='$username' and password='$password'";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
		}else{
			echo "<script> alert('Đăng nhập thất bại');";
			header('location:login.php');
		}
	}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="" method="post">
<center><table width="412" border="0">
  <tr>
    <td height="53" colspan="2" bgcolor="#008080" style="color:#FFF; font-size:36px; font-weight:bold"><div align="center">Login</div></td>
  </tr>
  <tr>
    <td width="121" height="38"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Username</div></td>
    <td width="275"><input type="text" name="username" size="40"></td>
  </tr>
  <tr>
    <td height="36"><div align="center" style="color:#0080C0; font-size:18px; font-weight:bold;">Password</div></td>
    <td><input type="password" name="password" size="40"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="login" class="button" id="button" value="Login">
        <input type="reset" name="button2" id="button2" class="button" value="Nhập lại" />
      </div>
  </td>
  </tr>
</table></center></form>
</div>