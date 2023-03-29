<?php
    require 'conect.php';
    $id = $_GET['updateid'];
    $sql = "select * from laptop where id = $id";
    $result1 = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result1);
      $tensp= $row['tensp'];
      $giasp=$row['giasp'];
      $hinhanh=$row['hinhanh'];
      $mota=$row['mota'];
      $soluong=$row['soluong'];
    if(isset($_POST['submit'])){
      $tensp= $_POST['tensp'];
      $giasp=$_POST['giasp'];
      $hinhanh=$_POST['hinhanh'];
      $mota=$_POST['mota'];
      $soluong=$_POST['soluong'];
      $query = "Update laptop set id = $id,tensp='$tensp',giasp = '$giasp',hinhanh = '$hinhanh', mota = '$mota',soluong = $soluong where id=$id";
      $result = mysqli_query($connect,$query);
      if($result){
          header('location:sanpham.php');
      }else{
         die(mysqli_error($connect));
      }
    }

?>