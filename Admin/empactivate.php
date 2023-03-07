<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_employee set status='1' where emp_id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Employee activated successfully";
} 
header("Location: employeeview.php");
?>
