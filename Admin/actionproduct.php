<?php
include("config.php");
session_start();
if(isset($_POST["btnsubmit"]))
{

    $Name=$_POST['name'];
   
   $sid=$_POST['sid'];
    $des=$_POST['des'];
    $photo=$_FILES["photo"]["name"];
    $Q=$_POST['quantity'];
    $price=$_POST['price'];
  
    move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]);
    
    $sql=mysqli_query($conn,"INSERT INTO tbl_product(prod_name,subcat_id,des,photo,quantity,price) VALUES('$Name','$sid','$des','$photo','$Q','$price')");

    
    
    
    if($sql)
      {
       
    echo "<script>alert('Product Details Registered Successfully!!');window.location='productvieww.php'</script>";
      }
    else
      {
    echo "<script>alert('Error');window.location='product.php'</script>";
      }
    }
    ?>
