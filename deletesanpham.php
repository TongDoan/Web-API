<?php  
require "conect.php";
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $query = "DELETE FROM laptop where id='$id'";
  $result =  mysqli_query($connect,$query);
  if($result){
    header('location:sanpham.php');
  }else {
    die(mysqli_error($connect));
  }
}
?>