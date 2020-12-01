<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "phuckhanh");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM loaisp";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <thead>
					<tr> 
						<th>ID</th>
                        <th>Tên Loại sp</th>
                       
                    </tr>
					</thead>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["id_loaisp"].'</td>  
                        <td>'.$row["tenloaisp"].'</td>  

     </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exportloaisp.xls');
  echo $output;
 }
}
?>
</body>
</html>