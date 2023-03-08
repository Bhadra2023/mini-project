<?php
include '../config.php';
// if(!isset($_SESSION['uname'])){
//     header('Location:login.php');
// }

if(isset($_GET['accept']))
{
$id=$_GET['accept'];

$sql2="UPDATE `tbl_delivery` SET `status`='1' WHERE delivery_id = '$id' ";
$res2=mysqli_query($conn,$sql2);
if($res2)
{
    header('location:../Admin/index.php');
}
}

if(isset($_GET['reject']))
{

$id=$_GET['reject'];

$sql2="UPDATE `tbl_delivery` SET `status`='5' WHERE delivery_id = '$id' ";
$res=mysqli_query($conn,$sql2);
if($res)
{
    header('location:../Admin/index.php');
}
   
}
  else{
    die(mysqli_error($conn));
}

?>