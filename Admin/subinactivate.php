<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_subcategory set sstatus='0' where subcat_id='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "Subcategory deactivated successfully";
}
header("Location: subcategoryview.php");
?>
