<?php
include "config.php";

session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$rid=$row1['cust_id'];

?>
               <!-- <script>
alert("Payment Completed Successfully");
window.location= "vieworder.php";</script> -->

            
      <?php
      $resu = mysqli_query($conn,"SELECT * FROM `tbl_cart` WHERE `cust_id` = '$rid' && `status` = '1'");
      if(mysqli_num_rows($resu)){
            while($row1 = mysqli_fetch_array($resu)){

                  $proid = $row1['pid'];
                  $regid = $row1['cust_id'];
                  $qty = $row1['quantity'];
                  $price = $row1['price'];
                  $sq = mysqli_query($conn, "INSERT INTO `tbl_order`
                  (`cust_id`, `totalamount`, `pid`, `quantity`, `orderstatus`, `payment_status`) 
                  VALUES('$regid','$price','$proid','$qty','1','1')");
                  if($sq){
                  //      $updt =  mysqli_query($con,"UPDATE `tbl_cart` SET `status` = '0' WHERE reg_id='$rid'");
                      
                  }
            }
      }
      $updt = mysqli_query($conn,"DELETE FROM `tbl_cart` WHERE `cust_id` = '$regid'");
      if($updt){
       die(header("location:Order.php"));
      }

      
      ?>
               </body>
</html>