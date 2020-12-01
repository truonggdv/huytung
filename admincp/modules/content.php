<div class="content">
    <?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}else{
		$tam='';
	}if($tam=='quanlyloaisp'){
		include('modules/quanlyloaisp/main.php');
	}else if($tam=='quanlychitietsp'){
		include('modules/quanlychitietsp/main.php');
	}else
	{
		include('modules/trangchu/main.php');
	}
	?>
<div class="clear"></div>