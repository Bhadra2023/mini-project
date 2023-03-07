<?php
include "config.php";

session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$rid=$row1['cust_id'];

?>
               <script>
alert("Payment Completed Successfully");
window.location= "cart.php";</script>

            
      <?php
      mysqli_query($conn,"DELETE  FROM `tbl_cart` where cust_id='$rid'");
      ?>
               </body>
</html>