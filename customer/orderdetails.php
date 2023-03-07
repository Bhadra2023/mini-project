<?php
include("config.php");
session_start();
$email=$_SESSION['email'];
$sql1="select * from `tbl_customer` where email='$email'";
$res=$conn->query($sql1);
$row1=$res->fetch_assoc();
$id=$row1['cust_id'];
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

                        <?php 
                            
                            $sql=mysqli_query($conn,"SELECT * FROM `tbl_order` where cust_id='$id'");
                            $sql2=mysqli_query($conn,"SELECT p.*,s.prod_name as pname,c.photo as photoo  FROM tbl_product p inner join tbl_cust_id s  on c.pid=s.pid ");

                            while($display1=mysqli_fetch_array($sql2))
                            {
while($display=mysqli_fetch_array($sql))
{ 
                                 
                                  ?> 
                           <script>
      function funcation1(){     
      var qty=document.getElementById("txtqty").value;
      var price=document.getElementById("txtprice").value;
      var total=qty*price;
      document.getElementById("totamt").value=total;
      }
      </script>
   
                             <div class="col-lg-4 col-sm-4">
                           
                           <div class="box_main"> 
                          
                           <input type="hidden" value="<?php echo $row['prod_name']?>" name="hiddenpname" id="hiddenpname"/>

                            <h4 class="shirt_text"><?php echo "$pname"?> </h4>
                              <p class="price_text"> Orginal Price  <span style="color: #262626;"><b> ₹  </b><?php echo "$c"?></span></p>
                            
                              <div class="jewellery_img"><img src="../Admin/photo/<?php echo "$image";?>" height="250px" width="250px"> </div>
                              <!-- <div class="btn_main"> -->
                              <input type="hidden" value="<?php echo $display['totalamount']?>" name="hiddenpname" id="hiddenpname"/>
                              <p class="price_text"><span style="color: #262626;"> <?php echo $display['prod_name']?></span></p>

                              <p class="price_text">Total Amount<span style="color: #262626;"><b> ₹  </b><?php echo $display['totalamount']?></span></p>
                              <p class="price_text">Quantity<span style="color: #262626;"> <?php echo $display['quantity']?></span></p>
                                 <!-- <div class="buy_bt"><a href="#">Buy Now</a></div>
                                  <div class="btn_main"> -->
                                  <!-- <input type="submit" name="submit" value="Add To cart" class="btn btn-danger" /> -->
                             

      </form>
                              </div>
                           </div>
                          <!-- </div> -->
                           
                          
                          
                           
                           <?php
}
    }
        
         
         ?>
         </div>
      </div>
      </div>
</div>
</div>
</div>
  
 </div>


 <div>
  
 
 
 



     </tbody>
   </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>



</body>
</html>

