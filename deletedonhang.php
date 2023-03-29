<?php  
require "conect.php";
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $query = "DELETE FROM chitepdonhang where id='$id'";
  $result =  mysqli_query($connect,$query);
  if($result){
    header('location:index.php');
  }else {
    die(mysqli_error($connect));
  }
}
?>