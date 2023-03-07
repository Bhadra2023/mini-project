<?php 
include('config.php');
session_start();
$n=$_SESSION['email'];


if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['usrId'])){
    $pymnt_id=$_POST['payment_id'];
    $amt=$_POST['amount'];
    $n = "Bhadra";
    $payment_status="0";
    $date=$_POST['date'];
    mysqli_query($conn,"INSERT INTO `tbl_payment`( `name`,`amount`,`payment_id`,`pstatus`,`date`)
     VALUES ('$n','$amt','$pymnt_id', '$payment_status','$date')");   
}
?>