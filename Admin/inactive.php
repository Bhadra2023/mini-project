<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_product set status='0' where pid='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "Product deactivated successfully";
}
header("Location: productvieww.php");
?>
 










