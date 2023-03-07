<?php
include("config.php");
session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$id=$row1['cust_id'];

// $sql5="select * from `tbl_cart` where reg_id='$id'";
// $res5=$con->query($sql5);
// $row5=$res5->fetch_assoc();
// echo $status=$row5['status'];exit;



  
 echo "item ordered";

 
?>