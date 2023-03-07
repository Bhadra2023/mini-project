<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_product set status='1' where pid='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Product activated successfully";
}
header("Location: productvieww.php");
?>
