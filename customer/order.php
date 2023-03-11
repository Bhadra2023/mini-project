<?php
include "config.php";
session_start();
$email=$_SESSION['email'];

if(!isset($email)){
  session_destroy();
  header('location:../login/login.php');
}
//$reg="SELECT *reg_id FROM `tbl_reg` WHERE `reg_email` = $email";
$sql = mysqli_query($conn,"SELECT * FROM tbl_customer where email='$email'");
$row = mysqli_fetch_array($sql);
$reg = $row['cust_id'];
$name = $row['name'];
// echo $name; exit;

$sql1 = mysqli_query($conn,"SELECT a.*,b.* FROM `tbl_order` as a INNER JOIN `tbl_product` as b ON a.cust_id='$reg' and a.pid=b.pid");
// $a=$row1['orderstatus'];
// if($a==1){
//   $n="Out of Delivery";
// }else{
//   $n="Delivered";
// }
// $row1 = mysqli_fetch_array($sql1);
// echo $row1['totalamount'];
// exit;

?>
<html lang="en">
<head>
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
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<title>Cart</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap'); * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; } :root { --text-clr: #4f4f4f; } p { color: #6c757d; } a { text-decoration: none; color: var(--text-clr); } a:hover { text-decoration: none; color: var(--text-clr); } h2 { color: var(--text-clr); font-size: 1.5rem; } .main_cart { background: #fff; } .card { border: none; } .product_img img { min-width: 200px; max-height: 200px; } .product_name { color: black; font-size: 1.4rem; text-transform: capitalize; font-weight: 500; } .card-title p { font-size: 0.9rem; font-weight: 500; } .remove-and-wish p { font-size: 0.8rem; margin-bottom: 0; } .price-money h3 { font-size: 1rem; font-weight: 600; } .set_quantity { position: relative; } .set_quantity::after { content: "(Note, 1 piece)"; width: auto; height: auto; text-align: center; position: absolute; bottom: -20px; right: 1.5rem; font-size: 0.8rem; } .page-link { line-height: 16px; width: 45px; font-size: 1rem; display: flex; justify-content: center; align-items: center; color: #495057; } .page-item input { line-height: 22px; padding: 3px; font-size: 15px; display: flex; justify-content: center; align-items: center; text-align: center; } .page-link:hover { text-decoration: none; color: #495057; outline: none !important; } .page-link:focus { box-shadow: none; } .price_indiv p { font-size: 1.1rem; } .fa-heart:hover { color: red; }
</style>
<!-- <style>
    #navb{
         color:white;
    }
</style> -->



<body class="bg-light">
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
                     <div class="logo"><a href="index.php"><b><h1 style="font-family:algerian;color:#ffffff;fontsize: 5spx;">Jewel</h1></b></a></div>
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
                     
                     <a href="profile.php">Profile</a>
                     <a href="address.php">  Address</a>
                     <a href="addressview.php">View address</a>
                     <a href="cart.php">My Cart</a>
                     <a href="vieworder.php">My Orders</a>
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


               


<section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-12">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h3 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;"><?php echo $name; ?></span>!</h3>
          </div>
          <div class="card-body p-4">
            
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                <?php
               if($sql1->num_rows>0){
                while($row1 = mysqli_fetch_array($sql1)){

                  $a=$row1['orderstatus'];
        if($a==1){
          $n =  "<div style=\"color: red;\">Out of Delivery</div>";
        // $n="Out of Delivery";
      
      }else{
        $n =  "<div style=\"color: green;\"> Delivered</div>";
      }

               ?>

                  <div class="col-md-2">
                    <img src="../Admin/photo/<?php echo $row1['photo'];?>" width='100' height='50'>
                  </div>
              
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Product Name: <?php echo $row1['prod_name']; ?> </p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Amount: <?php echo $row1['price']; ?> </p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Status: <?php echo $n; ?> </p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Qty: <?php echo $row1['quantity']; ?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Total: &#x20B9; <?php echo $row1['totalamount']; ?></p>
                  </div>
                  <div>
                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                  </div>
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
</section>


               <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>

               </body>
</html>