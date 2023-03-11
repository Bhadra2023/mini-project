<?php
include("config.php");


$id=$_POST['cart'];
$qty=$_POST['quantity'];
$price=$_POST['price'];
echo "$val";

//$sql="UPDATE `login` SET `value`='1' WHERE username = '$mname' ";
$sql22="update `tbl_cart` SET `quantity`='$qty',`price`='$price' WHERE `cart_id`='$id'";
$res=mysqli_query($conn,$sql22);
if($res)
{
   echo "success";
}
else
{
    echo "failed";
}


?>