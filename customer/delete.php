<?php
include "config.php";


if(isset($_GET['address_id']))
{
$val=$_GET['address_id'];
echo "$val";

//$sql="UPDATE `login` SET `value`='1' WHERE username = '$mname' ";
$sql22="DELETE FROM `address` WHERE address_id='$val'";
$res=mysqli_query($conn,$sql22);
if($res)
{
    header('location:addressview.php');
}
else
{
    die(mysqli_error($conn));
}
}

?>