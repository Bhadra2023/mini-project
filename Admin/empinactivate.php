<?php
session_start();
include('config.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_employee set status='0' where emp_id='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "employee deactivated successfully";
}
header("Location: employeeview.php");
?>