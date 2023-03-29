<?php
    require 'conect.php';
    $id = $_GET['updateid'];
    $sql = "select * from donhang where id = $id";
    $result1 = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result1);
      $tenkh= $row['tenkh'];
      $sodienthoai=$row['sodienthoai'];
      $diachi=$row['diachi'];
    if(isset($_POST['submit'])){
      $tenkh= $_POST['tenkh'];
      $sodienthoai=$_POST['sodienthoai'];
      $diachi=$_POST['diachi'];
      $query = "Update donhang set id = $id,tenkh='$tenkh',sodienthoai = '$sodienthoai',diachi = '$diachi' where id=$id";
      $result = mysqli_query($connect,$query);
      if($result){
          header('location:khachhang.php');
      }else{
         die(mysqli_error($connect));
      }
    }

?>