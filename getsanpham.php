<?php  
require "conect.php";
$query="SELECT * FROM chitietsp Order by id Desc";
$data= mysqli_query($connect,$query);

class Sanpham{
   function __construct($id,$tensp, $giasp, $hinhanh,$mota)
  {
  	$this->Id = $id;
    $this->Tensp = $tensp;
    $this->Giasp = $giasp;
    $this->Hinhanh = $hinhanh;
    $this->Mota = $mota;
  }
}
$mangSP=array();
while ($row=mysqli_fetch_assoc($data)) {
	array_push($mangSP, new Sanpham($row['id'],$row['tensp'],$row['giasp'],$row['hinhanh'],$row['mota']));
}
echo json_encode($mangSP);
?>