<?php
require "conect.php";
$json = $_POST['json'];
$data = json_decode($json, true);
// Create connection
foreach ( $data as  $value){
    $madonhang = $value['madonhang'];
    $masp = $value['masp'];
    $tensp = $value['tensp'];
    $giasp = $value['giasp'];
    $soluongsp = $value['soluongsp'];
    $hinhanh = $value['hinhanh'];
    $taikhoan = $value['taikhoan'];
    $query = "INSERT INTO chitepdonhang(id,madonhang,masp,tensp,giasp,soluongsp,hinhanh,taikhoan) VALUES (null,'$madonhang','$masp','$tensp','$giasp','$soluongsp','$hinhanh','$taikhoan')";
    $Dta =  mysqli_query($connect,$query);
}
if($Dta){
    echo "1";
}else{
    echo "0";
}
?>