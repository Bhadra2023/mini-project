<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_subcategory set sstatus='1' where subcat_id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg'] = "Subcategory activated successfully";
}
header("Location: subcategoryview.php");
?>
