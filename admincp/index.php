<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css.css" rel="stylesheet" type="text/css" />
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<title>Trang quản trị</title>
</head>

<body style="background-image:url(../imags/bg1.jpg)">
<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('location:login.php');
	}
?>
<div class="wrapper">
	<?php
		include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		include('modules/footer.php');
	?>
</div>
</body>
</html>