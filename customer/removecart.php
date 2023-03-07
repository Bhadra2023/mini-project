<?php
include "config.php";


if(isset($_GET['val']))
{
$val=$_GET['val'];
echo "$val";

//$sql="UPDATE `login` SET `value`='1' WHERE username = '$mname' ";
$sql22="DELETE FROM `tbl_cart` WHERE cart_id='$val'";
$res=mysqli_query($conn,$sql22);
if($res)
{
    header('location:cart.php');
}
else
{
    die(mysqli_error($conn));
}
}

?>