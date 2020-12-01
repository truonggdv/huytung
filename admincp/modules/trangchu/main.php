<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else
	{
		$tam='';
	}
	if($tam=='sua'){
		include('modules/trangchu/sua.php');
	}else{
		include('modules/trangchu/them.php');
	}
	?>
</div>
<div class="right">
<?php
	include('modules/trangchu/lietke.php');
	?>
</div>