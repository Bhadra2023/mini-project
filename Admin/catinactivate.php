<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_cat set cstatus='0' where cid='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "Category deactivated successfully";
}
header("Location: categoryview.php");
?>