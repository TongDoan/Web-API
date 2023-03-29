<?php
    require 'conect.php';
    if(isset($_POST['submit'])){
      $tensp= $_POST['tensp'];
      $giasp=$_POST['giasp'];
      $hinhanh=$_POST['hinhanh'];
      $mota=$_POST['mota'];
      $soluong=$_POST['soluong'];
      $query = "Insert into laptop (id,tensp,giasp,hinhanh,mota,soluong) VALUES (null,'$tensp','$giasp','$hinhanh','$mota','$soluong')";
      $result = mysqli_query($connect,$query);
      if($result){
          header('location:sanpham.php');
      }else{
         die(mysqli_error($connect));
      }
    }

?>