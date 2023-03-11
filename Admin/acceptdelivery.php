<?php
include '../config.php';
// if(!isset($_SESSION['uname'])){
//     header('Location:login.php');
// }

if(isset($_GET['accept']))
{
    $id=$_GET['accept'];
// exit;

$sql2="UPDATE `tbl_courier` SET `status`='1' WHERE courier_id = '$id' ";
$res2=mysqli_query($conn,$sql2);
if($res2)
{
    header('location:../Admin/index.php');
}
}

if(isset($_GET['reject']))
{

$id=$_GET['reject'];

$sql2="UPDATE `tbl_courier` SET `status`='5' WHERE courier_id = '$id' ";
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