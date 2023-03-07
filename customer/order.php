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


if(isset($_POST["checkout"]))
{
$productname=$_POST['pname'];
$totalamount=$_POST['p'];
$Quantity=$_POST['qty'];
// echo "$productname";exit;
$sql2="select * from tbl_product where prod_name='".$productname."'";
$ress=mysqli_query($conn,$sql2);
$row=mysqli_fetch_array($ress);
$pid=$row['pid'];
//   $Quantity=$row[''];
//   $pimg=$row['photo'];


  //move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]);
  //exit;


// $sql3=mysqli_query($conn,"SELECT * FROM tbl_order where prod_name='".$productname."' and cust_id='$id'");
  
//  $p=mysqli_num_rows($sql3);
//    if($p=mysqli_num_rows($sql3)>0)
// {
//    echo "<script>alert('product already exist')</script>"; 
// // exit;
// }


// if($status==0){
//    echo "already item is in your cart!";
 

$sql3="INSERT INTO `tbl_order`(`cart_id`, `cust_id`, `totalamount`,`pid`, `quantity`,`orderstatus`) VALUES (0,'$id','$totalamount','$pid','$Quantity',0)";
$res2=mysqli_query($conn,$sql3);
if($res2){

   //echo"item Ordered successfully";
}
}


?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jewel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.php"><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">JeWel</h1></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.php">Home</a>
                     
                     <a href="jewellery.html">profile</a>
                     <a href="address.php">Add address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php"> My Cart</a>
                     <a href="Orderview.php">My Orders</a>
                     <a href="../login/updatePass.php">change password</a>

                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="cart.php">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="../login/login.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Logout</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital"> Address</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <form role="form" action="" method="post">

                                    <!-- <div class="form-group">
                   
                

 <div class="panel-heading">

  
 </div>


 <div>

       
          -->

         
      
       <?php
include("config.php");
?>
<?php


$sql=mysqli_query($conn,"SELECT p.*,s.district_title as sname,c.state_title as c_name  FROM address p inner join district s on s.districtid=p.districtid inner join state c on c.state_id=s.state_id ");

while($display=mysqli_fetch_array($sql))
{

?>
<b >State:</b><h4 style="color:#8c212f"><?php echo $display['c_name']?></h4><br>
<b>District:</b><h4 style="color:#8c212f" ><?php echo $display['sname']?></h4>
<b>Pincode:</b><h4 style="color:#8c212f"><?php echo $display['pincode']?> </h4>
<b>Phone:</b><h4 style="color:#8c212f"><?php echo $display['phone']?></h4>
<b>Housename:</b><h4 style="color:#8c212f"><?php echo $display['housename']?></h4>
<b>Roadname:</b><h4 style="color:#8c212f"><?php echo $display['roadname']?></h4>




<!-- //  echo "<td><a style='color:#090' href='orderaddress.php?address_id=".$display['address_id']."'>Edit</a> </td>"; -->

 


<?php } ?>

 

</div></div>

    
   <center> <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                 
                            <div class="container">
                     <h1 class="fashion_taital">Product</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php 
                            
                              $x=$_POST["Quantity"];
                              $e=$_POST["p"];

                            
                             
                              $c=$_POST["price"];
                              $pname=$_POST["pname"];
                              $image=$_POST["image"];
                             
                                 
                                  ?> 
                          <script>
 function varr(cart)
    {
      var x=document.getElementById('qty-'+cart).value;
      
      x=parseInt(x);
      if(isNaN(x))
      {
        x=1
      }
      var price=document.getElementById('price-'+cart).value;
      price=parseInt(price);
     var total=x*price;
     document.getElementById('itemval-'+cart).innerHTML=total;
     

    var tot=document.getElementById('total1').value;

    tot=parseInt(tot);
    
    tot=tot-price+total;
    //tot=tot+total;
    
    document.getElementById('total').value=tot;
var f=document.getElementById('total').value;
document.getElementById('finalp').innerHTML=tot;
var p=tot+50;
document.getElementById('total_cart_amt').innerHTML=p;  
    }
 </script>
 <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
      <?php
      $sql="select * from `tbl_product`";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($res);
      ?>
                             <div class="col-lg-4 col-sm-4">
                           
                           <div class="box_main"> 
                          
                           <input type="hidden" value="<?php echo $row['prod_name']?>" name="hiddenpname" id="hiddenpname"/>

                            <h4 class="shirt_text"><?php echo "$pname"?> </h4>
                              <p class="price_text"> Orginal Price  <span style="color: #262626;"><b> ₹  </b><?php echo "$c"?></span></p>
                            
                              <div class="jewellery_img"><img src="../Admin/photo/<?php echo "$image";?>" height="250px" width="250px"> </div>
                              <!-- <div class="btn_main"> -->
                              <input type="hidden" value="<?php echo $row['prod_name']?>" name="hiddenpname" id="hiddenpname"/>

                              <p class="price_text">Total Amount<span style="color: #262626;"><b> ₹  </b><?php echo "$e"?></span></p>
                              <p class="price_text">Quantity<span style="color: #262626;"> <?php echo "$x"?></span></p>
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div>
                                  <div class="btn_main"> -->
                                  <!-- <input type="submit" name="submit" value="Add To cart" class="btn btn-danger" /> -->
                             

      </form>
                              </div>
                           </div>
                          <!-- </div> -->
                           
                          
                          
                           
                           <?php
  

        
         
         ?>
         </div>
      </div>
      </div>
</div>
</div>
</div>

                 
                          
            
      </div>
    </div>
    <br />
  </div>
  </div>
</form>
</body>
<script>

// var val= document.getElementById("totamt").value=total;
  
       

</script>
</html>














 




