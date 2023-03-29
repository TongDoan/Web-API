<?php  
require "conect.php";
$query="SELECT giasp FROM chitepdonhang";
$data= mysqli_query($connect,$query);
$doanhthu = 0;

while ($row=mysqli_fetch_assoc($data)) {
  $doanhthu += intval($row['giasp']);
}
echo number_format($doanhthu);
?>